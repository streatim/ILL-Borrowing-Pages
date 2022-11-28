<?php //Set page Metadata
    $page = [
        'Title' => 'How do I Renew Requests From Other Libraries?',
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
		<div class="intro"><!--Bolded Section Header-->
			<strong>How do I Renew...</strong>
        </div>
        <div class="contentCopy">
			<?php
				$accordionArray = [
					'melCat' => [
						'heading' => '...from MelCat?',
						'content' => [
							'Renew through your '.returnTextLink('catalogAccount').' or call '.tel('userServices'),
							'<br><strong>Books</strong> - 1 Renewal for 3 Weeks',
							'<br><strong>DVDs, CDs</strong> - No Renewals',
							'<br>You cannot renew items that are:',
							'<ul><li>On hold for another person</li>',
							'<li>Already have been renewed once</li></ul>',
							'<hr><strong>Overdue MelCat Items</strong><br>',
							'<p>Overdue MeLCat items are charged a $0.25 fine for every day overdue for the first 8 days. ',
							'Once an item is 8 days overdue, the item is charged $5 per day for every day overdue. Fines are cumulative.</p>',
							'<p class="linkBlueBold"><strong>Questions?</strong> Reach out through any of '.returnTextLink('askTheMardigian', 'our contact options').'.</p>'
						]
					],
					'illiad' => [
						'heading' => '...from Illiad?',
						'content' => [
							'Renew requests through the "Checked Out Items" menu in '.extLink('https://ill.lib.umich.edu/illiad/illiad.dll', 'Illiad').'.',
							'<br>Click on the transaction number in order to see your renewal options.',
							'<br>You can renew 5 days before the due date.',
							'<br>You are granted a temporary new due date while ILL negotiates the due date with the owning library.',
							'<hr><strong>Overdue Illiad Items</strong><br>',
							'<p>Illiad Borrowing privileges will be suspended if an item is 14 days or more beyond its due date or if a recalled item is one or more days overdue. ',
							'MLibrary borrowing privileges will be suspended if an item is 30 days or more beyond its due date. ',
							'Privileges will be restored when the overdue item has been returned.</p>',
							'<p class="linkBlueBold"><strong>Questions about ILLIAD?</strong>
							<br>Reach out to the '.extLink('https://www.lib.umich.edu/locations-and-hours/hatcher-library/interlibrary-loan-office', 'ILLIAD service').' in Ann Arbor.</p>',
						]
					],
					'annArbor' => [
						'heading' => '...from Ann Arbor?',
						'content' => [
							'You can find ',
							extLink('https://umd-umich.libanswers.com/faq/335092', 'complete instructions on renewing items that you borrowed from Ann Arbor libraries'),
							' on the Mardigian Library\'s website.',
						]
					],
				];
			?>
			<br>
			<?php accordion($accordionArray); ?>
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
