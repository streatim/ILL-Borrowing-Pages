<?php //Set page Metadata
    $page = [
        'Title' => 'How do I Request - Book Chapters',
        'Links' => [
			'requestArticle',
			'requestChapter',
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
		<div class="intro"><!--Bolded Section Header-->
            <p>Step-by-Step Instructions for requesting articles through ILLiad</p>
        </div>
        <div class="contentCopy">
			<p>Article Requests are single articles from a journal, usually received electronically through ILLIAD, the library's Interlibrary loan request system. To place a request</p>
			<ol>
				<li>Log into ILLiad at <?php echo extLink('https://ill.lib.umich.edu/illiad/illiad.dll'); ?></li>
				<li>Click on the Article link next to Place a Request at the top of the ILLiad Form</li>
				<li>Fill out the form as completely as possible. Make sure to fill out required fields
					<ul>
						<li>Use DOI Finder at the top of the form and then click Autofill if you know the DOI (Digital Object Identifier) for the article you want. This will fill out most of the required form fields for you.</li>
						<li>Including an ISSN number will increase the speed with which your request is filled.</li>
					</ul>
				</li>
				<li>When you have completed the form, click the "Submit Request" button.
					<ul>
						<li>Click on All Requests in the left sidebar to check the status of your request</li>
					</ul>
				</li>
				<li>You will be notified by email when your article is available.
					<ul>
						<li>Click on Completed Requests in the left sidebar to access the article </li>
					</ul>
				</li>
			</ol>
			<p class="linkBlueBold"><strong>Questions about requesting Book Chapters through ILLIAD?</strong>
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
