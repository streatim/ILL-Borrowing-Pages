<?php //Set page Metadata
    $page = [
        'Title' => 'How do I Request Specific Items from Other Libraries?',
        'Links' => [
            'borrowingOtherLibraries',
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
    <?php
        $instructions = [
            'illiad' => [
                extLink('https://ill.lib.umich.edu/illiad/illiad.dll', 'log in directly via Illiad').' and fill out a request form.'
            ],
            'getthis' => [
                'check the '.returnTextLink('getthis').' page for full instructions.',    
            ],
            'melcat' => [
                'go to '.extLink('https://mel.org/', 'the MeL website').' and search in their search box.',
            ]
        ];

        $help = [
            'illiad' => [
                '<p class="linkBlueBold"><strong>Questions about requesting articles through ILLIAD?</strong><br>',
                'Reach out to the '.extLink('https://www.lib.umich.edu/locations-and-hours/hatcher-library/interlibrary-loan-office', 'ILLIAD service').' in Ann Arbor.</p>',
            ],
            'getthis' => [
                '<p class="linkBlueBold"><strong>Questions about Get This?</strong><br>',
                'Reach out through any of '.returnTextLink('askTheMardigian', 'our contact options').'.</p>'
            ],
            'melcat' => [
                '<p class="linkBlueBold"><strong>Questions about MeLCat?</strong><br>',
                'Check the '.extLink('https://mel.org/help/melcat-help#requesting', 'MeLCat Website').' ',
                'or reach out through any of '.returnTextLink('askTheMardigian', 'our contact options').'.</p>'
            ]
        ]
    ?>

	<!-- Content -->
	<div class="large-9 medium-9 columns">
		<div class="intro"><!--Bolded Section Header-->
			<strong>How do I Borrow...</strong>
        </div>
        <div class="contentCopy">
			<?php
				$accordionArray = [
					'articles' => [
						'heading' => '...Articles from other libraries?',
						'content' => [
							'<p>You can request articles from other libraries using the library\'s interlibrary loan services. ',
                            'There are no fees for UM-Dearborn students, faculty, or staff to place these requests.</p>',
                            '<p>To request an article from another library, '.implode("", $instructions['illiad']).'</p>',
                            implode("", $help['illiad']),
						]
					],
					'chapters' => [
						'heading' => '...Book Chapters from other Libraries?',
						'content' => [
							'<p>You can request book chapters from other libraries using the library\'s interlibrary loan services. ',
                            'There are no fees for UM-Dearborn students, faculty, or staff to place these requests.</p>',
                            '<p>To request a book chapter from another library, '.implode("", $instructions['illiad']).'</p>',
                            implode("", $help['illiad']),
						]
					],
					'books' => [
						'heading' => '...Books from other Libraries?',
						'content' => [
							'You have a number of options for requesting books from other libraries. ',
                            'There are no fees for UM-Dearborn students, faculty, or staff to place these requests. ',
                            'We recommend going in the following order to find books from other libraries:',
                            '<br><br>',
                            '<ol>',
                                '<li><strong>Get This</strong><br>',
                                '<p>To use Get This to request a book, '.implode("", $instructions['getthis']).'</p>',
                                implode("", $help['getthis']).'</li>',
                                '<hr>',
                                '<li><strong>MeLCat</strong><br>',
                                '<p>To use MeLCat to request a book, '.implode("", $instructions['melcat']).'</p>',
                                implode("", $help['melcat']).'</li>',
                                '<hr>',
                                '<li><strong>ILLiad</strong><br>',
                                '<p>To use ILLiad to request a book, '.implode("", $instructions['illiad']).'</p>',
                                implode("", $help['illiad']).'</li>',
                            '</ol>'
						]
					],
                    'av' => [
						'heading' => '...A/V (DVD/Audio Book/CD) from other Libraries?',
						'content' => [
							'You have a number of options for requesting A/V materials from other libraries. ',
                            'There are no fees for UM-Dearborn students, faculty, or staff to place these requests. ',
                            'We recommend going in the following order to find A/V materials from other libraries:',
                            '<br><br>',
                            '<ol>',
                                '<li><strong>MeLCat</strong><br>',
                                '<p>To use MeLCat to request an A/V item, '.implode("", $instructions['melcat']).'</p>',
                                implode("", $help['melcat']).'</li>',
                                '<hr>',
                                '<li><strong>ILLiad</strong><br>',
                                '<p>To use ILLiad to request an A/V item, '.implode("", $instructions['illiad']).'</p>',
                                implode("", $help['illiad']).'</li>',
                            '</ol>'
						]
                    ],
                    'dissertationsTheses' => [
						'heading' => '...Dissertations or Theses from other Libraries?',
						'content' => [
							'<p>You can request dissertations and theses from other libraries using the library\'s interlibrary loan services. ',
                            'There are no fees for UM-Dearborn students, faculty, or staff to place these requests. ',
                            'Please note that these items can be difficult to obtain depending on the policies of the lending institution or library</p>',
                            '<p>To request a book chapter from another library, '.implode("", $instructions['illiad']).'</p>',
                            implode("", $help['illiad']),
						]
                    ],
                    'micro' => [
						'heading' => '...Microfilm or Microfiche from other Libraries?',
						'content' => [
							'<p>You can request microfilm or microfiche from other libraries using the library\'s interlibrary loan services. ',
                            'There are no fees for UM-Dearborn students, faculty, or staff to place these requests. ',
                            'Please note that these items can be difficult to obtain depending on the policies of the lending institution or library</p>',
                            '<p>To request a book chapter from another library, '.implode("", $instructions['illiad']).'</p>',
                            implode("", $help['illiad']),
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
