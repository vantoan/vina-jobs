<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

\app\components\AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='shortcut icon' type='image/x-icon' href='<?= \app\components\tona\Helper::siteURL() ?>/favicon.ico'/>
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<meta name="keywords" content="Seeking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);
		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href='http://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet'
	      type='text/css'>
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?= $this->render('vina_jobs_partial/header') ?>

<div class="banner">
	<div class="container">
		<div id="search_wrapper">
			<div id="search_form" class="clearfix">
				<h1>Start your job search</h1>

				<p>
					<input type="text" class="text" placeholder=" " value="Enter Keyword(s)" onfocus="this.value = '';"
					       onblur="if (this.value == '') {this.value = 'Enter Keyword(s)';}">
					<input type="text" class="text" placeholder=" " value="Location" onfocus="this.value = '';"
					       onblur="if (this.value == '') {this.value = 'Location';}">
					<label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
				</p>

				<h2 class="title">top Countries & searches</h2>
			</div>
			<div id="city_1" class="clearfix">
				<ul class="orange">
					<li>
						<a href="#">Japan</a>
					</li>
					<li>
						<a href="#" title="Kenya Jobs">Kenya</a>
					</li>
					<li>
						<a href="#" title="Australia Jobs">Australia</a>
					</li>
					<li>
						<a href="#" title="Poland Jobs">Poland</a>
					</li>
					<li>
						<a href="#" title="Oman Jobs">Oman</a>
					</li>
					<li>
						<a href="#" title="Pakistan jobs">Pakistan</a>
					</li>
					<li>
						<a href="#" title="Saudi Arbia Jobs">Saudi Arbia</a>
					</li>
					<li>
						<a href="#" title="Doha Jobs">Doha</a>
					</li>
				</ul>
				<ul class="orange">
					<li>
						<a href="#" title="Russia Jobs">Russia</a>
					</li>
					<li>
						<a href="#" title="Germany Jobs">Germany</a>
					</li>
					<li>
						<a href="#" title="Canada Jobs">Canada</a>
					</li>
					<li>
						<a href="#" title="Hong Kong Jobs">Hong Kong</a>
					</li>
					<li>
						<a href="#" title="Spain Jobs">Spain</a>
					</li>
					<li>
						<a href="#" title="Thailand Jobs">Thailand</a>
					</li>
					<li>
						<a href="#" title="Norway Jobs">Norway</a>
					</li>
					<li>
						<a href="#" title="Srilanka Jobs">Srilanka</a>
					</li>
				</ul>
				<ul class="blue">
					<li>
						<a href="#" title="Information Technology">Mexico</a>
					</li>
					<li>
						<a href="#" title="Fresher">Fresher</a>
					</li>
					<li>
						<a href="#" title="Engineering">Engineering</a>
					</li>
					<li>
						<a href="#" title="Finance Jobs">Finance</a>
					</li>
					<li>
						<a href="#" title="Teaching">Teaching</a>
					</li>
					<li>
						<a href="#" title="Software">Software</a>
					</li>
					<li>
						<a href="#" title="Accounting">Accounting</a>
					</li>
					<li>
						<a href="#" title="Data Entry">Data Entry</a>
					</li>
				</ul>
				<ul class="blue">
					<li>
						<a href="#" title="Marketing Jobs">Marketing </a>
					</li>
					<li>
						<a href="#" title="Freelancer">Freelancer</a>
					</li>
					<li>
						<a href="#" title="Internet Jobs">Internet</a>
					</li>
					<li>
						<a href="#" title="Sales">Sales</a>
					</li>
					<li>
						<a href="#" title="Legal">Legal</a>
					</li>
					<li>
						<a href="#" title="HR">HR</a>
					</li>
					<li>
						<a href="#" title="MBA">MBA</a>
					</li>
					<li>
						<a href="#" title="Pharma">Pharma</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<?= $content ?>

<?= $this->render('vina_jobs_partial/footer') ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
