<?php
/**
 * This class will handle the control of the URL parameters, it will decide which page to show depending on the parameters.
 * 
 * if GET Request
 * 
 * 1) /{page}/ => will execute /private/pages/{page}/index.php if it exists
 * 2) /{page}/{lang} => will execute /private/pages/{page}/{lang}/index.php if it exists, {lang} is the language version of the page.
 * 3) /{page}/a/.../z => this will redirect to 
 *          1) /{page}/ if a is not {lang}
 *          2) /{page}/{lang} if a is {lang}
 * 
 * if POST Request
 * 
 * 1) /{page}/ => will execute /private/post/{page}/index.php if it exists
 */
class UrlHandler {

    public static $lang = array("en","fr");
    private static $request_folders = array("GET" => "pages", "POST" => "post");
    
    /**
     *
     * @param  string[] $url
     *
     */
    public function __construct($url) {
        $this->url = $url;
        $this->type = UrlHandler::$request_folders[$_SERVER["REQUEST_METHOD"]];

        if(count($url) === 0)
            $this->homePage();

        else if(count($url) === 1)
            $this->nonLangPage();

        else if(count($url) === 2 && in_array($url[1],UrlHandler::$lang))
            $this->langPage();

        else if(count($url) >= 2) {
            if(in_array($url[1],UrlHandler::$lang))
                $this->redirectLang();
            else
                $this->redirect();
        }
    }

    private function homePage() {
        include("pages/home/index.php");
    }

    /**
     * Handle a url page request with no language specified.
     */
    private function nonLangPage() {
        $page = $this->url[0];
        $type = $this->type;
        $this->page("../private/$type/$page/index.php");
    }

    /**
     * Handle a url page request with a language specified.
     */
    private function langPage() {
        $page = $this->url[0];
        $lang = $this->url[1];
        $type = $this->type;
        $this->page("../private/$type/$page/$lang/index.php");
    }

    /**
     * Handle a url page request with multiple parameters and no language
     */
    private function redirect() {
        $page = $this->url[0];
        header("Location: ".SERVER_HOST."/$page");
        die();
    }

    /**
     * Handle a url page request with multiple parameters and language
     */
    private function redirectLang() {
        $page = $this->url[0];
        $lang = $this->url[1];
        header("Location: ".SERVER_HOST."/$page/$lang");
        die();
    }

    /**
     * Echo the page in the specified php file if it exists. Otherwise return a page not found.
     *
     * @param  string $phpFile
     *
     */
    private function page($phpFile) {
        if(file_exists($phpFile))
            include($phpFile);

        else {
            http_response_code(404);
            include("pages/404/index.php");
        }
    }
}

?>