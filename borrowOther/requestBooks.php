<?php //Set page Metadata
    $page = [
        'Title' => 'How do I Request - Books',
        'Links' => [
			'requestArticle',
			'requestChapter',
            'requestBooks',
        ],
        'Breadcrumbs' => [
            'Services' => False,
			'Borrowing from Other Libraries...' => 'borrowingOtherLibraries',
        ]
    ];
    $pageTitle = $page['Title'];
?>
	<!--Start Header-->
	<?php include($_SERVER['DOCUMENT_ROOT'] .'/header.php');?> 
	<!--END HEADER-->

	<!--Lead Section for Secondary Pages-->
	<?php include($_SERVER['DOCUMENT_ROOT'] .'/lead.php');?> 
	<!--END LEAD-->
    <?php echo buildPage('topHead-sidebar', $page); ?>
	<!--Do not edit above-->

	<!-- Content -->
	<div class="large-9 medium-9 columns">
		<div class="contentCopy">
			<p>You can request articles from other libraries using the library's interlibrary loan services. There are no fees for UM-Dearborn students, faculty, or staff to place these requests.</p>
		</div>
        <div class="intro">
            <p>Get This</p>
        </div>
        <div class="contentCopy"> <!--Copy Content Here-->
            <p>"Get This" is a service of the University Libraries in Ann Arbor. Current UM-Dearborn students, faculty and staff can request items from the UM-Ann Arbor and UM-Flint libraries, and have them delivered to the Dearborn library by using the MLibrary catalog. To use Get This:</p>
            <ol>
                <li>Find the item you need in the MLibrary catalog:<br>
                <?php echo extLink('https://search.lib.umich.edu/catalog?library=All+libraries'); ?>
                </li>
                <li>Click on the title of the item you would like to borrow. Look for the “Get This” link, towards the bottom of the page and click there.</li>
                <li>Scroll down to “How would you like to get this item?” and log in with your uniqname and Kerberos password</li>
                <li>Select “Pick it up at the library”</li>
                <li>Choose “UM-Dearborn Mardigian Library” as the Pickup location</li>
                <li>Click “Get me this item” to submit your request</li>
                <li>When your item has arrived, UM-Dearborn library staff will send you an email. Items are held for seven days before being sent back to UM-Ann Arbor.</li>
            </ol>
			<p class="linkBlueBold"><strong>Questions about requesting books through Get This?</strong>
			<br>Reach out to the <?php echo extLink('https://lib.umich.edu/ask-librarian', 'Ask a Librarian service'); ?> in Ann Arbor.</p>
        </div>
        <div class="intro">
            <p>MeLCat</p>
        </div>
        <div class="contentCopy"> <!--Copy Content Here-->
            <p><strong>MeLCat</strong> is a library resource sharing service available to participating Michigan libraries. You can request books by going to <?php echo extLink('https://mel.org/'); ?> and enter the title, author, or keywords in the MeLCat Search box on the homepage. To order books and other materials through MeLCat, follow <?php echo extLink('https://mel.org/help/melcat-help#requesting', 'these instructions'); ?> on the MeLCat website.</p>
			<p>Library users who belong to a MelCat library can:
                <ol>
                    <li>Search for books, CD's, and DVD's from libraries across the state of Michigan.</li>
                    <li>Request materials be delivered to the Mardigian Library.</li>
                    <li>Checkout books in person at select <?php echo extLink('http://elibrary.mel.org/screens/participating.html', '"Visiting Patron"'); ?> libraries.</li>
                </ol>
                <strong>MeLCat items requested at UM-Dearborn may only be picked up and returned at the Mardigian Library.</strong>
            </p>
            <p class="linkBlueBold"><strong>Questions?</strong> Reach out through any of <?php textLink('askTheMardigian', 'our contact options'); ?>.</p> 
        </div>
		<div class="intro"><!--Bolded Section Header-->
            <p>Step-by-Step Instructions for requesting books through ILLiad</p>
        </div>
        <div class="contentCopy">
			<p>Physical items, including books, can be requested for delivery to the Mardigian Library or to University Libraries in Ann Arbor. Textbooks are very hard to obtain through interlibrary loan. Try <strong>MeLCat</strong> instead. To place a request:</p>
			<ol>
				<li>Log into <strong>ILLiad</strong> at <?php echo extLink('https://ill.lib.umich.edu/illiad/illiad.dll'); ?></li>
				<li>Click on the <strong>Loan (book, microform, AV, etc)</strong> link next to <em>Place a Request</em> at the top of the ILLiad Form</li>
				<li>Fill out the form as completely as possible. Make sure to fill out required fields.
					<ul>
						<li>Including an ISBN number will increase the speed with which your request is filled.</li>
					</ul>
				</li>
				<li>When you have completed the form, click the "Submit Request" button.
					<ul>
						<li>Click on <strong>All Requests</strong> in the left sidebar to check the status of your request</li>
					</ul>
				</li>
				<li>You will be notified by email when your book is available.
					<ul>
						<li>Click on <strong>Completed Requests</strong> in the left sidebar to see all of your completed ILLiad requests.</li>
					</ul>
				</li>
			</ol>
			<p class="linkBlueBold"><strong>Questions about requesting books through ILLIAD?</strong>
			<br>Reach out to the <?php echo extLink('https://www.lib.umich.edu/locations-and-hours/hatcher-library/interlibrary-loan-office', 'ILLIAD service'); ?> in Ann Arbor.</p>
		</div>
	</div>

	<!--Do not edit below-->
    <?php echo buildPage('bottom-content'); ?>
	<!--Facts/Did You Know Section--> 
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/facts.php');?> 
	<!--End Facts/Did you Know-->
	<!--Footer-->
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php');?> 
	<!--End Footer-->
