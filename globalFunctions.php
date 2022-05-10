<?php require_once($_SERVER['DOCUMENT_ROOT'] .'/Connections/ML_DatabasesPDO.php'); ?>
<?php //This is where global functions used on all library websites would be placed.

    //This function either opens or closes an accordion item
    function accordionItem($openClose, $id=null, $heading=null){
        if($openClose === 'open'&&$id!==null&&$heading!==null){
            $outputArray = [
                '<li class="accordion-navigation" role="tab">',
                    '<a href="#panel'.$id.'" id="panel'.$id.'-heading" aria-controls="panel'.$id.'">'.$heading,
                    icon('circleDown'),
                    '</a>',
                    '<div id="panel'.$id.'" class="content" role="tabpanel" aria-labelledby="panel'.$id.'-heading">',
            ];
            return implode("", $outputArray);
        } elseif($openClose === 'close'){
            $outputArray = [
                    '</div>',
                '</li>'
            ];
            return implode("", $outputArray);
        }
    }
    //This is a function that builds the basic divs and layout of the pages. 
    function buildPage($type, $pageMetadata = null){
        $output = [];

        //topHead-sidebar is the top half of the page, with a sidebar.
        if($type === 'topHead-sidebar' && $pageMetadata !== null){
            //Create the breadcrumbs.
            $breadcrumbs = makeCrumbs($pageMetadata['Breadcrumbs'], $pageMetadata['Title']);
            //Get the sideNavBar
            $sideNavBar = sideBar($pageMetadata['Links']);

            //Set up the top part of the content section.
            $output = [
                '<section class="contentPanel">',
                    '<div class="headerFullWidth">',
                        '<div class="row">',
                            '<div class="large-12 columns">',
                                '<nav class="breadcrumbs" role="menubar" aria-label="breadcrumbs">',
                                    $breadcrumbs,
                                '</nav>',
                            '</div>',
                        '</div>',
                    '</div>',
                    '<div class="row">',
                        '<div class="large-12 columns">',
                            '<h2 class="pageTitle">'.$pageMetadata['Title'].'</h2>',
                        '</div>',
                    '</div>',
                    '<div class="row">',
                        '<div class="large-12 columns">',
                            $sideNavBar,
            ];
        }

        //topHead-no-sidebar is the top half of the page, without a sidebar (no links)
        if($type === 'topHead-no-sidebar' && $pageMetadata !== null){
            //Create the breadcrumbs.
            $breadcrumbs = makeCrumbs($pageMetadata['Breadcrumbs'], $pageMetadata['Title']);
            
            //Set up the top part of the content section.
            $output = [
                '<section class="contentPanel">',
                    '<div class="headerFullWidth">',
                        '<div class="row">',
                            '<div class="large-12 columns">',
                                '<nav class="breadcrumbs" role="menubar" aria-label="breadcrumbs">',
                                    $breadcrumbs,
                                '</nav>',
                            '</div>',
                        '</div>',
                    '</div>',
                    '<div class="row">',
                        '<div class="large-12 columns">',
                            '<h2 class="pageTitle">'.$pageMetadata['Title'].'</h2>',
                        '</div>',
                    '</div>',
                    '<div class="row">',
                        '<div class="large-12 columns">',
            ];
        }
        
        //bottom-content is the bottom half of the page and closes out divs for topHead.
        if($type === 'bottom-content'){
            $output = [
                        '</div>', //Closes large-12 columns.
                    '</div>', //Closes the Row.
                '</section>', //Closes the section that the topHeads start with.
            ];
        }
        
        return implode("", $output);
    }

    //This function builds the basic divs and layout of the pages. Replaced by buildPage('topHead-sidebar', $pageMetadata);
    function buildPage1($pageMetadata){
        //Create the breadcrumbs.
        $breadcrumbs = makeCrumbs($pageMetadata['Breadcrumbs'], $pageMetadata['Title']);
        //Get the sideNavBar
        $sideNavBar = sideBar($pageMetadata['Links']);

        //Set up the top part of the content section.
        $output = [
            '<section class="contentPanel">',
                '<div class="headerFullWidth">',
                    '<div class="row">',
                        '<div class="large-12 columns">',
                            '<nav class="breadcrumbs" role="menubar" aria-label="breadcrumbs">',
                                $breadcrumbs,
                            '</nav>',
                        '</div>',
                    '</div>',
                '</div>',
                '<div class="row">',
                    '<div class="large-12 columns">',
                        '<h2 class="pageTitle">'.$pageMetadata['Title'].'</h2>',
                    '</div>',
                '</div>',
                '<div class="row">',
                    '<div class="large-12 columns">',
                        $sideNavBar,
        ];

        return implode("" ,$output);
    }
    //This function is to close any divs opened in buildPage1. We could just do it in the content itself, but this way we're keeping them together.
    function buildPage2(){
        $output = [
                    '</div>', //Closes large-12 columns above the sidebarNav.
                '</div>', //Closes the Row.
            '</section>', //Closes the section that buildPage1 starts with.
        ];

        return implode("", $output);
    }

    //This function creates an external link and presumes inline text use.
    function extLink($link, $text = ''){
        $linkText = ($text == '') ? $link : $text;
        $output = '<a rel="external" target="blank" href="'.$link.'">'.$linkText.'</a>';
        return $output;
    }

    //This function only returns the path value for a link. Sometimes there's such specialized HTML that a function isn't necessarily justified, but we want to make sure we're plugged into the global variable for the path.
    function globalHref($key){
        //Set global variable.
        global $pageLink;

        if(isset($pageLink[$key])){
            //There is a link for the given key.
            return $pageLink[$key]['path'];
        }    
    }
    
    //This function creates an icon using a global list of icons, usually font-awesome.
    function icon($key){
        global $faIcon;
        //Check to see if there's a font awesome icon being called and that it exists.
        $output = ($key!==''&&isset($faIcon[$key])) ? '<i class="'.$faIcon[$key].'"></i>' : '';
        return $output;
    }

    //This function creates an <li> item with a link, but only if that link is active in globalVariables.
    function listLink($key, $text =''){
        $linkInfo = printLink($key, $text);
        if($linkInfo !== ''){
            echo '<li>'.$linkInfo.'</li>';
        }
    }

    //This function creates a mailto link. It may need to be developed more.
    function mailto($key){
        global $groupEmails;
        if(isset($groupEmails[$key])){
            $output = '<a href="mailto:'.$groupEmails[$key].'">'.$groupEmails[$key].'</a>';
        } else {
            $output = 'Nope';
        }
        return $output;
    }

    //This function makes the breadcrumbs html.
    function makeCrumbs($crumbArray, $title){
        $output[] = '<li role="menuitem"><a href="/index.php">Home</a></li>';
        foreach($crumbArray as $crumb=>$clickable){
            $crumbOptions = ($clickable === FALSE) ? 
                ' class="unavailable" role="button" aria-disabled="true">'.$crumb.'</a>' : 
                '>'.printLink($clickable, $crumb);
            $output[] = '<li role="menuitem"'.$crumbOptions.'</li>';
        }
        $output[] = '<li role="menuitem" class="current"><a href="#">'.$title.'</a></li>';

        return implode("", $output);
    }

    //This function uses a global variable to print out an img link.
    function printImage($key, $altText = '', $classes=null){
        echo 'Hi!';
    }

    //This function uses a global variable to print out an a href.
    function printLink($key, $linkText = '', $linkTarget = '', $icon = ''){
        //Set global variable.
        global $pageLink;

        $output = [];
        //Check to see if there's any target info.
        $target = ($linkTarget !== '') ? ' target="'.$linkTarget.'"' : '';
        if(isset($pageLink[$key])){
            //There is a link for the given key.
            //Check for preexisting link text or use the default.
            $text = ($linkText !== '') ? $linkText : $pageLink[$key]['text'];

            //Check to see if the linkText is saying to use the HTML link or not.
            if($text === 'HTMLText'){
                //Use the HTML Text. If it's an external URL, use that - otherwise use the path.
                $text = (substr($pageLink[$key]['path'], 0, 1) === '/') ?
                            'https://'.$_SERVER['SERVER_NAME'].$pageLink[$key]['path'] :
                            $pageLink[$key]['path'];
            }
            //Check to see if there's a font awesome icon being called and that it exists.
            $iconHTML = icon($icon);

            //Create the a href output.
            $output = [
                '<a href="'.$pageLink[$key]['path'].'"'.$target.'>',
                $text,
                $iconHTML,
                '</a>'
            ];
        } elseif(substr($key, 0, 7) === 'custom:'){
            //This is a custom printLink - not used widely enough to justify adding to the global variables but we still want to take advantage of some of the automation. Usually a wizard search url (on bookplates)

            //Get the actual URL.
            $pathURL = str_replace('custom:', '', $key);
            //Set the text.
            if($linkText !== ''){
                $text = $linkText;
            } else {
                $text = (substr($pathURL, 0, 1) === '/') ?
                            'https://'.$_SERVER['SERVER_NAME'].$pathURL :
                            $pathURL;
            }
            //Check to see if there's a font awesome icon being called and that it exists.
            $iconHTML = icon($icon);     

            //Create the a href output.
            $output = [
                '<a href="'.$pathURL.'"'.$target.'>',
                $text,
                $iconHTML,
                '</a>'
            ];
        }

        return implode("", $output);
    }

    //This function takes an array of link IDs and builds a sidebar to be returned.
    function sideBar($links){
        //Set global variables. Both of these are from globalFunctions.php
        global $pageLink;
        $output  = '<div class="sideNav large-3 medium-3 columns">';
        //Primary Side Navigation. This uses the links provided.
        if(count($links)>0){
            //Primary links provided.
            $output .= '<ul class="sideTopNav large-block-grid-1 medium-block-grid-1 small-block-grid-1">';
            foreach($links as $linkKey){
                if(isset($pageLink[$linkKey])){
                    $output .= '<li>';
                    if($_SERVER['REQUEST_URI'] === $pageLink[$linkKey]['path']){$output .= '<strong>';}
                    $output .= printLink($linkKey, '', '', 'circleRight');
                    if($_SERVER['REQUEST_URI'] === $pageLink[$linkKey]['path']){$output .= '</strong>';}
                    $output .= '</li>';
                }
            }
            $output .= '</ul>';
        }

        //Put the standard links out.
        $output .= '<ul class="sideBottomNav large-block-grid-1 medium-block-grid-1 small-block-grid-1">';
        $output .= '<li>'.printLink('askTheMardigian', '', '', 'circleRight').'</li>';
        $output .= '<li>'.printLink('directions', '', '', 'circleRight').'</li>';
        $output .= '<li>'.printLink('helpfaq', '', '', 'circleRight').'</li>';
        $output .= '</ul>';

        //Close the DIV.
        $output .= '</div>';
        return $output;
    }

    //This function creates a telephone link. It may need to be developed more.
    function tel($key){
        global $groupPhone;
        if(isset($groupPhone[$key])){
            $output = '<a href="tel:1-'.$groupPhone[$key].'">'.$groupPhone[$key].'</a>';
        } else {
            $output = 'Nope.';
        }
        return $output;
    }

    //This function takes a staff title and returns contact information.
    function titleContact($title){
        global $libraryDB;
        //Prep the title provided.
        $searchTitle = $libraryDB->prepare("SET @StaffTitle = :StaffTitle;");
        $searchTitle->bindValue(":StaffTitle", "$title", PDO::PARAM_STR);
        $searchTitle->execute();	

        //Get Contact Info
		$subQuery = [
			"SELECT A.UniqName, CONCAT(A.StaffFName, ' ', A.StaffLName) AS StaffName, A.StaffPhone, A.StaffOffice",
			"FROM ML_Public_Website.Staff A",
			"WHERE A.StaffTitle LIKE @StaffTitle;"
		];

		$subExecute = $libraryDB->prepare(implode(" ",$subQuery));
		$subExecute->execute();
		$subResults = $subExecute->fetch(PDO::FETCH_ASSOC);

        $output = (count($subResults>0)) ? $subResults : [];
        return $output;
    }

    //This function creates an inline text link that opens in a new window.
    function textLink($key, $text = ''){
        //Check to see if it's within the library website.
        global $pageLink;
        //If it is a File or outside of the main domain, open in a new tab. Otherwise in the same.
        $newPage =  (isset($pageLink[$key]) && 
                        (substr($pageLink[$key]['path'], 0, 1) === '/' && 
                        substr($key, 0, 4) !== 'file')) ?
                    '' : '_blank';
        $linkText = printLink($key, $text, $newPage);
        $output = ($linkText !== '') ? $linkText : $text;
        echo $output;
    }
?>