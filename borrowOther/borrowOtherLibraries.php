<?php //Set page Metadata
    $page = [
        'Title' => 'Borrowing Items from Other Libraries',
        'Links' => [
			'courseReserves',
			'borrowingOtherLibrariesILL',
			'borrowingOtherLibrariesMEL',
			'visitingOtherLibraries',
        ],
        'Breadcrumbs' => [
            'Services' => False,
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
			<p>What if the Mardigian Library doesn't have the resource I need? You can request items from other libraries using the library's following three loan services. There are no fees for UM-Dearborn students, faculty, or staff to place these requests.</p>
			<ol>
				<li><strong>Get This - Borrow from other University of Michigan Campuses</strong><br>
				First, check the UM Ann Arbor catalog and use <?php textLink('getthis', 'Get This'); ?>, to request books and other media from UM-Ann Arbor and UM-Flint to be delivered to the Mardigian Library.
				</li><br>
				<li><strong>MeLCAT - Borrow from other libraries in Michigan</strong><br>
				Second, try <?php echo extLink('https://mel.org/welcome', 'MeLCAT'); ?>, the Michigan eLibrary, a 24/7 online library for Michigan residents. MelCAT allows you to order books, audio books, music, movies, and other materials and have them delivered to the Mardigian Library.
				</li><br>
				<li><strong>Interlibrary Loan (ILL) - Borrow from other libraries across the world</strong><br>
				Third, use <?php textLink('ill'); ?> to find books, dissertations, microforms, or periodical articles.
			</ol>
		</div>
		<div class="intro"><!--Bolded Section Header-->
            <p>How do I...</p>
        </div>
        <div class="contentCopy">
			<ul>
				<?php listLink('requestArticle', '...request articles?'); ?>
				<?php listLink('requestChapter', '...request book chapters?'); ?>
				<?php listLink('requestBooks', '...request books?'); ?>
				<?php listLink('requestAV', '...request DVDs, audio books, or CDs?'); ?>
				<?php listLink('requestDissertations', '...request a thesis or dissertations?'); ?>
				<?php listLink('requestMicro', '...request microfilm, microform, or microfiche?'); ?>
				<?php listLink('requestRenewals', '...renew items from other institutions?'); ?>
			</ul>
		</div>
<!--		<div class="intro"><!--Bolded Section Header--
            <p>Frequently Asked Questions</p>
        </div>
        <div class="contentCopy">
		</div>
-->
	</div>

	<!--Do not edit below-->
    <?php echo buildPage('bottom-content'); ?>
	<!--Facts/Did You Know Section--> 
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/facts.php');?> 
	<!--End Facts/Did you Know-->
	<!--Footer-->
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php');?> 
	<!--End Footer-->
