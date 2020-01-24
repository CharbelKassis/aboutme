<!DOCTYPE html>
<?php
    class HTMLBuilder {
        private $head = "<meta charset=\"UTF-8\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"><meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\"><link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\" integrity=\"sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay\" crossorigin=\"anonymous\"><link rel=\"stylesheet\" type=\"text/css\" href=\"http://fonts.googleapis.com/css?family=Ubuntu\"/><link rel=\"stylesheet\" href=\"/style/global.css\"><script src=\"/000webhostapp/debloater.js\"><script>document.addEventListener('DOMContentLoaded',e=>document.body.classList.remove('transition'));</script>";
        private $body = "";
        private $title = "";
        private $bodyClasses = array("transition");
        private $bodyId = "";

        /**
         * add CSS urls to the head
         *
         * @param string[] $styles
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
         * @param  string $style
         *
         * @return HTMLBuilder
         */
        public function addStyle($styleUrl=NULL) {
            if(is_string($styleUrl))
                $this->head .= "<link rel=\"stylesheet\" href=\"$styleUrl\">";
            return $this;
        }

        /**
         * add JavaScript urls to the head
         *
         * @param  string[] $scriptsUrl
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
         * @param  string $script
         *
         * @return HTMLBuilder
         */
        public function addScript($scriptUrl=NULL,$isModule=false) {
            if(is_string($scriptUrl))
                $this->head .= "<script ". ($isModule ? "type=\"module\" " : " ") . "src=\"$scriptUrl\"></script>";
            return $this;
        }

        /**
         * add the HTML body to the html. Must be a php file.
         *
         * @param  string $body -The url to the body code, must be a php file because it will be included when building the html page
         *
         * @return HTMLBuilder
         */
        public function addBody($body) {
            if(is_string($body))
                $this->body = $body;
            return $this;
        }

        /**
         * add a class to the body.
         * 
         * @param string $class -The class added to body
         * 
         * @return HTMLBuilder         
         */
        public function addBodyClass($class) {
            if(is_string($class))
                array_push($this->bodyClasses,$class);
            return $this;
        }

        /**
         * add classes to the body
         * 
         * @param string[] $classes -The classes added to body
         *
         * @return HTMLBuilder         
         */
        public function addBodyClasses($classes) {
            if(is_array($classes))
                $this->bodyClasses = array_merge($this->bodyClasses,$classes);
            return this;
        }

        /**
         * add id to the body
         * 
         * @param string $id -The id added to body
         * 
         * @return HTMLBuilder
         */
        public function addBodyId($id) {
            if(is_string($id))
                $this->bodyId = $id;
            return $this;
        }

        /**
         * echo the head tag 
         */
        private function getHead() {
            echo "<head>" . $this->head . $this->title . "</head>";
        }

        /**
         * echo the body tag
         */
        private function getBody() {
            $bodyTag = "<body";    
            $bodyTag .= ($this->bodyId !== "" ? " id=\"$this->bodyId\"" : "");

            if(count($this->bodyClasses) > 0) {
                $bodyTag .= " class=\"";
                foreach($this->bodyClasses as $class)
                    $bodyTag .= " $class";
                $bodyTag .= "\" ";
            }
            $bodyTag .= ">";

            echo $bodyTag;

            include PRIVATE_ROOT."/include/nav.php";
            echo "<div id=\"main\">";
            include $this->body;
            //TODO include the footer

            echo "</div></body>";
        }

        /**
         * add the title to the head
         * 
         * @param string $title -The title of the web page
         * 
         * @return HTMLBuilder
         */
        public function setTitle($title) {
            if(is_string($title))
                $this->title = "<title>$title</title>";
            return $this;
        }

        /**
         * echo the HTML
         */
        public function getHtml() {
            echo("<html>");
            $this->getHead();
            $this->getBody();
            echo("</html>");
        }
    }
?>