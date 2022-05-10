<?php //Global PHP Variables go here.

    //A list of repeated font awesome icons.
    $faIcon = [
        'arrowLeft' => 'fa fa-arrow-left',
        'arrowRight' => 'fa fa-arrow-right',
        'circleRight' => 'fa fa-chevron-circle-right',
        'circleDown' => 'fa fa-chevron-circle-down',
    ];

    //$pageLink includes paths and default link text for pages.
    $pageLink = [ 
        'alumniServices' => [
            'path' => '/services/alumni.php',
            'text' => 'Alumni Services',
        ],
        'askTheMardigian' => [
            'path' => '/us/ask.php',
            'text' => 'Ask the Mardigian',
        ],
        'bookDelivery' => [
            'path' => '/services/borrowing/bookDelivery.php',
            'text' => 'Library Item Delivery Service',
        ],
        'bookplatesMain' => [
            'path' => '/bookplates/index.php',
            'text' => 'Digital Bookplates'
        ],
        'bookplates50th' => [
            'path' => '/bookplates/50th-gift.php',
            'text' => '50th Anniversary Gift Bookplates'
        ],
        'bookplates2009' => [
            'path' => '/bookplates/2009.php',
            'text' => 'Class of 2009 Bookplates'
        ],
        'bookplates2010' => [
            'path' => '/bookplates/2010.php',
            'text' => 'Class of 2010 Bookplates'
        ],
        'bookplatesalumni' => [
            'path' => '/bookplates/alumni.php',
            'text' => 'Alumni Authors Collection',
        ],
        'bookplatesBaker' => [
            'path' => '/bookplates/baker.php',
            'text' => 'The Baker Collection',
        ],
        'bookplatesBalbach' => [
            'path' => '/bookplates/balbach.php',
            'text' => 'The Balbach Collection',
        ],
        'bookplatesBravender' => [
            'path' => '/bookplates/bravender.php',
            'text' => 'Patricia Bravender Collection',
        ],
        'borrowing' => [
            'path' => '/services/borrowing.php',
            'text' => 'Borrowing Items from the Mardigian',
        ],
        'borrowingOtherLibraries' => [
            'path' => '/services/borrowOther/borrowOtherLibraries.php',
            'text' => 'Borrowing Items from Other Libraries',
        ],
        'borrowingOtherLibrariesGET' => [
            'path' => '/services/borrowOtherLibraries.php?link=get',
            'text' => 'Get This',
        ],
        'borrowingOtherLibrariesILL' => [
            'path' => '/services/borrowOtherLibraries.php?link=ill',
            'text' => 'Interlibrary Loan',
        ],
        'borrowingOtherLibrariesMEL' => [
            'path' => '/services/borrowOtherLibraries.php?link=mel',
            'text' => 'MeLCat',
        ],
        'catalog' => [
            'path' => 'https://wizard.umd.umich.edu',
            'text' => 'Library Catalog',
        ],
        'catalogAccount' => [
            'path' => 'https://wizard.umd.umich.edu/patroninfo',
            'text' => 'Library Account'
        ],
        'courseReserves' => [
            'path' => '/services/course_reserves.php',
            'text' => 'Course Reserves',
        ],
        'directions' => [
            'path' => '/us/directions.php',
            'text' => 'Directions &amp; Maps',
        ],
        'eresources' => [
            'path' => '/find/databases.php',
            'text' => 'Databases &amp; E-Resources',
        ],
        'facultybooking' => [
            'path' => '/verify/vidbook.php',
            'text' => 'Faculty Booking Service',
        ],
        'fileFloorPlan' => [
            'path' => '/verify/libraryfloorplans.pdf',
            'text' => 'Library Floor Plans',
        ],
        'fileProxyCard' => [
            'path' => '/pdf/ProxyCardApplication.pdf',
            'text' => 'Proxy Card Application',
        ],
        'fileVerificationForm' => [
            'path' => '/pdf/UMD_Library_Verification_Form.pdf',
            'text' => 'UM-Dearborn Student or Visiting Scholar Verification Form',
        ],
        'findBooks' => [
            'path' => '/find/books.php',
            'text' => 'Books, e-books &amp; Media',
            'parent' => 'find',
        ],
        'findJournals' => [
            'path' => '/find/journals.php',
            'text' => 'Journals',
            'parent' => 'find',
        ],
        'findLibrarian' => [
            'path' => '/services/librarians.php',
            'text' => 'Find Your Librarian',
            'parent' => 'services',
        ],
        'fines' => [
            'path' => '/services/borrowing/fines.php',
            'text' => 'Fines &amp; Fees',
            'parent' => 'borrowing',
        ],
        'formCourseSupport' => [
            'path' => '/verify/coursesupport.php',
            'text' => 'Faculty Course Support Form',
        ],
        'formDeliveryRequest' => [
            'path' => '/verify/delivery_form.php',
            'text' => 'Delivery Service Request Form',
        ],
        'formRecallRequest' => [
            'path' => '/services/recall_form.php',
            'text' => 'Recall Form',
        ],
        'getStarted' => [
            'path' => '/find/getstarted.php',
            'text' => 'GET STARTED @ THE MARDIGIAN LIBRARY'
        ],
        'helpfaq' => [
            'path' => '/find/helpfaq.php',
            'text' => 'Help/FAQ',
        ],
        'holds' => [
            'path' => '/services/borrowing/holds.php',
            'text' => 'Placing a Hold',
            'parent' => 'borrowing',
        ],
        'home' => [
            'path' => '/index.php',
            'text' => 'Home',
        ],
        'hours' => [
            'path' => '/us/hours.php',
            'text' => 'Library Hours',
        ],
        'juvenileCollection' => [
            'path' => '/find/juvenile.php',
            'text' => 'Juvenile Collection',
        ],
        'libraryAccount' => [
            'path' => '/services/borrowing/libraryaccount.php',
            'text' => 'Your Library Account',
            'parent' => 'borrowing',
        ],
        'libraryReportsAndPolicies' => [
            'path' => '/us/reports_policies.php',
            'text' => 'Library Reports &amp; Policies',
            'parent' => 'borrowing',
        ],
        'libraryPartnerships' => [
            'path' => '/services/partnership.php',
            'text' => 'Librarian Partnerships',
        ],
        'libraryPin' => [
            'path' => '/services/borrowing/pin.php',
            'text' => 'Library PIN',
            'parent' => 'borrowing',
        ],
        'loanableTech' => [
            'path' => '/find/available.php',
            'text' => 'Loanable Tech &amp; Resources',
        ],
        'loanPeriods' => [
            'path' => '/services/borrowing/loanPeriods.php',
            'text' => 'Loan Periods',
            'parent' => 'borrowing',
        ],
        'mcard' => [
            'path' => '/services/borrowing/mcards.php',
            'text' => 'MCards &amp; Passwords',
            'parent' => 'borrowing',
        ],
        'proxyCard' => [
            'path' => '/services/borrowing/proxyCard.php',
            'text' => 'Proxy Cards',
        ],
        'recalls' => [
            'path' => '/services/borrowing/recalls.php',
            'text' => 'Recall an Item',
            'parent' => 'borrowing',
        ],
        'renewals' => [
            'path' => '/services/borrowing/renewals.php',
            'text' => 'Renewing Items',
            'parent' => 'borrowing',
        ],
        'requestArticle' => [
            'path' => '/services/borrowOther/requestArticle.php',
            'text' => 'How do I Request - Articles',
            'parent' => 'borrowingOtherLibraries',
        ],
        'requestBooks' => [
            'path' => '/services/borrowOther/requestBooks.php',
            'text' => 'How do I Request - Books',
            'parent' => 'borrowingOtherLibraries',
        ],
        'requestChapter' => [
            'path' => '/services/borrowOther/requestChapter.php',
            'text' => 'How do I Request - Book Chapters',
            'parent' => 'borrowingOtherLibraries',
        ],
        'researchEd' => [
            'path' => '/services/researcheducation.php',
            'text' => 'Research Education &amp; Assistance',
            'parent' => 'services',
        ],
        'returns' => [
            'path' => '/services/borrowing/returns.php',
            'text' => 'Returning Item',
            'parent' => 'borrowing',
        ],
        'subjectGuides' => [
            'path' => 'https://guides.umd.umich.edu/',
            'text' => 'Subject Guides',
        ],
        'search' => [
            'path' => '/services/borrowing/search.php',
            'text' => 'Search and Borrow Items from the Mardigian',
            'parent' => 'borrowing',
        ],
        'tutorialDatabaseSearch' => [
            'path' => '/tutorials/How_Do_I_Search_Library_Databases/story.html',
            'text' => 'Tutorial - How do I search library databases?',
        ],
        'visitingOtherLibraries' => [
            'path' => '/services/other.php',
            'text' => 'Visiting Other Libraries',
        ],
        'whoCanBorrowGuests' => [
            'path' => '/services/borrowing/borrowingGuests.php',
            'text' => 'Who Can Borrow - Guests',
            'parent' => 'borrowing',
        ],
        'whoCanBorrowOtherInstitutions' => [
            'path' => '/services/borrowing/borrowingOtherInstitutions.php',
            'text' => 'Who Can Borrow - Students &amp; Faculty from Other Colleges &amp; Universities',
            'parent' => 'borrowing',
        ],
        'whoCanBorrowRetiree' => [
            'path' => '/services/borrowing/borrowingRetirees.php',
            'text' => 'Who Can Borrow - Retired UM-Dearborn Faculty and Staff',
            'parent' => 'borrowing',
        ],
        'whoCanBorrowUMsfs' => [
            'path' => '/services/borrowing/borrowingUMDsfs.php',
            'text' => 'Who Can Borrow - UM Students, Faculty, and Staff',
            'parent' => 'borrowing',
        ],
        'whoCanBorrowVisiting' => [
            'path' => '/services/borrowing/borrowingVisiting.php',
            'text' => 'Who Can Borrow - UM-Dearborn Visiting Scholars',
            'parent' => 'borrowing',
        ],
    ];

    //$imageLink includes the paths and default alt text for all images.
    $imageLink = [
        
    ];

    $groupPhone = [
        'userServices' => '313-593-5553',
    ];

    $groupEmails = [
        'userServices' => 'mardigian-library-user-services@umich.edu',
        'courseReserves' => 'mardigian-library-reserves@umich.edu',
    ];
?>
<?php //This section performs a check on the $pageLink variable. If there are any duplicate paths, set them to a javascript variable that can be checked.
    foreach($pageLink as $key=>$site){
        if(!in_array($site['path'], $checkList)){
            $checkList[] = $site['path'];
        } else {
            $duplicate[] = $key;
        }
    }
    if(isset($duplicate)){
        echo '<script type="text/javascript">';
            echo 'const duplicates = '.json_encode($duplicate);
        echo '</script>';
    }
?>