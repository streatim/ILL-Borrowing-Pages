<?php //Set page Metadata
    $page = [
        'Title' => 'How do I Request - AV',
        'Links' => [
			'requestArticle',
			'requestChapter',
            'requestBooks',
            'requestAV',
            'requestDissertations',
            'requestMicro',
            'requestRenewals',
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
			<p>You can request audiovisual (AV) materials such as DVDs or CDs from other libraries using the library's interlibrary loan services. There are no fees for UM-Dearborn students, faculty, or staff to place these requests.</p>
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
            <p>Step-by-Step Instructions for requesting AV materials through ILLiad</p>
        </div>
        <div class="contentCopy">
			<p>It is possible to request a scan of a single chapter from a book, usually received electronically. To place a request:</p>
			<ol>
				<li>Log into <strong>ILLiad</strong> at <?php echo extLink('https://ill.lib.umich.edu/illiad/illiad.dll'); ?></li>
				<li>Click on the <strong>Loan (book, microform, AV, etc)</strong> link next to <em>Place a Request</em> at the top of the ILLIAD Form</li>
				<li>Fill out the form as completely as possible. Make sure to fill out required fields.
					<ul>
						<li>Be sure to enter N/A in the required ISBN box</li>
					</ul>
				</li>
				<li>When you have completed the form, click the "Submit Request" button.
					<ul>
						<li>Click on <strong>All Requests</strong> in the left sidebar to check the status of your request.</li>
					</ul>
				</li>
				<li>You will be notified by email when your book chapter is available.
					<ul>
						<li>Click on <strong>Completed Requests</strong> in the left sidebar to view all of your completed requests.</li>
					</ul>
				</li>
			</ol>
		</div>
		<p class="linkBlueBold"><strong>Questions about requesting book chapters through ILLIAD?</strong>
			<br>Reach out to the <?php echo extLink('https://www.lib.umich.edu/locations-and-hours/hatcher-library/interlibrary-loan-office', 'ILLIAD service'); ?> in Ann Arbor.</p>
	</div>

	<!--Do not edit below-->
    <?php echo buildPage('bottom-content'); ?>
	<!--Facts/Did You Know Section--> 
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/facts.php');?> 
	<!--End Facts/Did you Know-->
	<!--Footer-->
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php');?> 
	<!--End Footer-->
