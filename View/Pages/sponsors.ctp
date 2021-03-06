<div class="span10">
	<p>SydPHP could not be the ongoing success and enjoyable event that it has grown to become today, without the ongoing generous support of our sponsors.</p>
	<p>It is though this support that we are able to deliver great quality talks, in a central venue in Sydney, with special events throughout the year.</p>
	
	<h3>Become a sponsor!</h3>
	<p>If you run a business, or work for a company that would like to gain more exposure in the Sydney, and Australia-wide PHP community, consider sponsoring Sydney's PHP user group. Its a great way to get to know developers, reach a new audience, and a superb way to give back to the PHP community.</p>
	<p><?php echo $this->Html->link('Contact us for more information.', array(
		'plugin' => 'enquiries',
		'controller' => 'enquiries',
		'action' => 'add',
	)); ?></p>
	
	<ul>
		<li><a href="#ongoing">Ongoing Sponsors</a></li>
		<li><a href="#phunconf2">Phunconference 2.0</a></li>
	</ul>
	
	<a name="ongoing">
	<br/>
	<h2>Ongoing sponsors:</h2>
	<?php
	echo $this->element('sponsor', array(
		'name' => 'Mammoth Media',
		'url'  => 'http://www.mammothvps.com.au/vps/plans?ref=efb3c177e80549afbbc69f36011fee24',
		'logo' => 'http://photos1.meetupstatic.com/photos/sponsor/c/1/5/4/iab120x90_469492.jpeg',
		'text' => array(
			'Mammoth Media support the SydPHP user group through the provision of kickass servers for hosting the SydPHP website.',
			'Their servers are local, reasonably priced, and they have a great support team.',
			'Mammoth also provide development services, content management, consulting, search engine optimisation and more.'
		),
	));

	echo $this->element('sponsor', array(
		'name' => 'Spinifex Group',
		'url'  => 'http://www.spinifexgroup.com',
		'logo' => 'http://photos3.meetupstatic.com/photos/sponsor/c/7/b/c/iab120x90_471132.jpeg',
		'text' => array(
			'The Spinifex Group show their support for the Sydney PHP user group by providing us with finances to book meeting rooms on a regular basis. It is through this support that we are able to provide free events.',
			'They are a creative communications company, recognised as one of the world leaders in the highly specialised field of experience media.'
		),
	));

	echo $this->element('sponsor', array(
		'name' => 'Cake Development Corporation',
		'url'  => 'http://www.cakedc.com',
		'logo' => 'http://photos4.meetupstatic.com/photos/sponsor/c/7/d/0/iab120x90_471152.jpeg',
		'text' => array(
			'The Cake Development Corporation occasionally puts up money to purchase food, drinks, and more. Further, they allow the time out of regular work days to enable the organisers to co-ordinate and manage the meetup events.',
			'CakeDC provides development and consulting services, specialising in CakePHP application development.',
			'They also provide mobile application development, and training services.'
		),
	));
	?>

	<a name="phunconf2">
	<br/>
	<h2>Event Sponsors - Phunconference 2.0</h2>
	<?php
	echo $this->element('sponsor', array(
		'name' => 'Anchor Systems',
		'url'  => 'http://www.anchor.com.au',
		'logo' => '/img/sponsor/anchor_logo_162x50_original.gif',
		'text' => array(
			'Anchor Systems Pty Ltd. kindly sponsored the SydPHP 2011 Phunconference with a generous supply of beer to quench the thirst of our PHP development community.',
			'Anchor systems provide hosting services, domains names, colocation and management solutions.',
			'Check their website for more information.'
		),
	));
	
	
	?>
</div>

<div class="span4 sidebar">
	<?php echo $this->element('layout/sidebar'); ?>
</div>
