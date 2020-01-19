<!DOCTYPE html>
<html lang="en">
<?php
    class HTMLBuilder {
        private $head = "<head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\" integrity=\"sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"http://fonts.googleapis.com/css?family=Ubuntu\"/>
        <link rel=\"stylesheet\" href=\"/style/global.css\">
        <script src=\"/000webhostapp/debloater.js\">
        <script>document.addEventListener('DOMContentLoaded',e=>document.body.classList.remove('transition'));</script>";
        private $body = "";

        /**
         * add CSS urls to the head
         *
         * @param  array $styles
         *
         * @return HTMLBuilder
         */
        public function addStyles($styleUrls=NULL) {
            if(is_array($styleUrls))
                foreach($styleUrls as $style) 
                    $this->addStyle($style);
                
            return $this;
        }

        
        /**
         * add a CSS url to the head
         *
         * @param  mixed $style
         *
         * @return HTMLBuilder
         */
        public function addStyle($styleUrl=NULL) {
            $this->head .= "<link rel=\"stylesheet\" href=\"$styleUrl\">";
            return $this;
        }

        /**
         * add JavaScript urls to the head
         *
         * @param  mixed $scriptsUrl
         *
         * @return HTMLBuilder
         */
        public function addScripts($scripts=NULL) {
            if(is_array($scripts))
            foreach($scripts as $script) 
                $this->addScript($script["url"],$script["isModule"]);
            
            return $this;
        }

        
        /**
         * add a JavaScript url to the head
         *
         * @param  mixed $script
         *
         * @return HTMLBuilder
         */
        public function addScript($scriptUrl=NULL,$isModule=false) {
            if(is_string($scriptUrl))
                $this->head .= "<script ". ($isModule ? "type=\"module\" " : " ") . "src=\"$scriptUrl\"></script>";

            return $this;
        }

        
        /**
         * add the HTML body to the html
         *
         * @param  string $body -The url to the body code
         *
         * @return HTMLBuilder
         */
        public function addBody($body) {
            if(is_string($body))
                $this->body = $body;
            return $this;
        }

        /**
         * echo the HTML
         */
        public function getHtml() {
            echo($this->head."</head>");
            echo("<body class='transition'>");
            include PRIVATE_ROOT."/include/nav.php";
            include $this->body;
            echo("</body>");
            echo("</html>");
        }
    }
?>