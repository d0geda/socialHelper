<?php
// source: /data/web/virtuals/205013/virtual/www/subdom/apps/socialHelper/app/config/config.neon 
// source: /data/web/virtuals/205013/virtual/www/subdom/apps/socialHelper/app/config/config.local.neon 

class Container_3cdf3b2709 extends Nette\DI\Container
{
	protected $meta = [
		'types' => [
			'Nette\Application\Application' => [1 => ['application.application']],
			'Nette\Application\IPresenterFactory' => [1 => ['application.presenterFactory']],
			'Nette\Application\LinkGenerator' => [1 => ['application.linkGenerator']],
			'Nette\Caching\Storages\IJournal' => [1 => ['cache.journal']],
			'Nette\Caching\IStorage' => [1 => ['cache.storage']],
			'Nette\Http\RequestFactory' => [1 => ['http.requestFactory']],
			'Nette\Http\IRequest' => [1 => ['http.request']],
			'Nette\Http\Request' => [1 => ['http.request']],
			'Nette\Http\IResponse' => [1 => ['http.response']],
			'Nette\Http\Response' => [1 => ['http.response']],
			'Nette\Http\Context' => [1 => ['http.context']],
			'Nette\Bridges\ApplicationLatte\ILatteFactory' => [1 => ['latte.latteFactory']],
			'Nette\Application\UI\ITemplateFactory' => [1 => ['latte.templateFactory']],
			'Nette\Mail\IMailer' => [1 => ['mail.mailer']],
			'Nette\Application\IRouter' => [1 => ['routing.router']],
			'Nette\Security\Passwords' => [1 => ['security.passwords']],
			'Nette\Security\IUserStorage' => [1 => ['security.userStorage']],
			'Nette\Security\User' => [1 => ['security.user']],
			'Nette\Http\Session' => [1 => ['session.session']],
			'Tracy\ILogger' => [1 => ['tracy.logger']],
			'Tracy\BlueScreen' => [1 => ['tracy.blueScreen']],
			'Tracy\Bar' => [1 => ['tracy.bar']],
			'App\Forms\FormFactory' => [1 => ['1']],
			'App\Presenters\BasePresenter' => [1 => ['2', 'application.1', 'application.3']],
			'Nette\Application\UI\Presenter' => [['2', 'application.1', 'application.3']],
			'Nette\Application\UI\Control' => [['2', 'application.1', 'application.3']],
			'Nette\Application\UI\Component' => [['2', 'application.1', 'application.3']],
			'Nette\ComponentModel\Container' => [['2', 'application.1', 'application.3']],
			'Nette\ComponentModel\Component' => [['2', 'application.1', 'application.3']],
			'Nette\Application\UI\IRenderable' => [['2', 'application.1', 'application.3']],
			'Nette\ComponentModel\IContainer' => [['2', 'application.1', 'application.3']],
			'Nette\ComponentModel\IComponent' => [['2', 'application.1', 'application.3']],
			'Nette\Application\UI\ISignalReceiver' => [['2', 'application.1', 'application.3']],
			'Nette\Application\UI\IStatePersistent' => [['2', 'application.1', 'application.3']],
			'ArrayAccess' => [['2', 'application.1', 'application.3']],
			'Nette\Application\IPresenter' => [['2', 'application.1', 'application.2', 'application.3', 'application.4', 'application.5']],
			'App\Auth\Authenticate' => [1 => ['2']],
			'App\Main\Main' => [1 => ['3']],
			'App\Main\Response' => [1 => ['4']],
			'App\Main\Inhert' => [1 => ['5', '6']],
			'App\Main\Youtube\Youtube' => [1 => ['5']],
			'App\Main\Instagram\Instagram' => [1 => ['6']],
			'App\Presenters\HomepagePresenter' => [1 => ['application.1']],
			'App\Presenters\ErrorPresenter' => [1 => ['application.2']],
			'App\Presenters\Error4xxPresenter' => [1 => ['application.3']],
			'NetteModule\ErrorPresenter' => [1 => ['application.4']],
			'NetteModule\MicroPresenter' => [1 => ['application.5']],
			'Nette\DI\Container' => [1 => ['container']],
		],
		'services' => [
			'application.1' => 'App\Presenters\HomepagePresenter',
			'application.2' => 'App\Presenters\ErrorPresenter',
			'application.3' => 'App\Presenters\Error4xxPresenter',
			'application.4' => 'NetteModule\ErrorPresenter',
			'application.5' => 'NetteModule\MicroPresenter',
			'application.application' => 'Nette\Application\Application',
			'application.linkGenerator' => 'Nette\Application\LinkGenerator',
			'application.presenterFactory' => 'Nette\Application\IPresenterFactory',
			'cache.journal' => 'Nette\Caching\Storages\IJournal',
			'cache.storage' => 'Nette\Caching\IStorage',
			'container' => 'Nette\DI\Container',
			'http.context' => 'Nette\Http\Context',
			'http.request' => 'Nette\Http\Request',
			'http.requestFactory' => 'Nette\Http\RequestFactory',
			'http.response' => 'Nette\Http\Response',
			'latte.latteFactory' => 'Nette\Bridges\ApplicationLatte\ILatteFactory',
			'latte.templateFactory' => 'Nette\Application\UI\ITemplateFactory',
			'mail.mailer' => 'Nette\Mail\IMailer',
			'routing.router' => 'Nette\Application\IRouter',
			'security.passwords' => 'Nette\Security\Passwords',
			'security.user' => 'Nette\Security\User',
			'security.userStorage' => 'Nette\Security\IUserStorage',
			'session.session' => 'Nette\Http\Session',
			'tracy.bar' => 'Tracy\Bar',
			'tracy.blueScreen' => 'Tracy\BlueScreen',
			'tracy.logger' => 'Tracy\ILogger',
			1 => 'App\Forms\FormFactory',
			'App\Auth\Authenticate',
			'App\Main\Main',
			'App\Main\Response',
			'App\Main\Youtube\Youtube',
			'App\Main\Instagram\Instagram',
		],
		'tags' => [
			'inject' => [
				'application.1' => true,
				'application.2' => true,
				'application.3' => true,
				'application.4' => true,
				'application.5' => true,
				2 => true,
			],
			'nette.presenter' => [
				'application.1' => 'App\Presenters\HomepagePresenter',
				'application.2' => 'App\Presenters\ErrorPresenter',
				'application.3' => 'App\Presenters\Error4xxPresenter',
				'application.4' => 'NetteModule\ErrorPresenter',
				'application.5' => 'NetteModule\MicroPresenter',
				2 => 'App\Auth\Authenticate',
			],
		],
		'aliases' => [
			'application' => 'application.application',
			'cacheStorage' => 'cache.storage',
			'httpRequest' => 'http.request',
			'httpResponse' => 'http.response',
			'nette.cacheJournal' => 'cache.journal',
			'nette.httpContext' => 'http.context',
			'nette.httpRequestFactory' => 'http.requestFactory',
			'nette.latteFactory' => 'latte.latteFactory',
			'nette.mailer' => 'mail.mailer',
			'nette.presenterFactory' => 'application.presenterFactory',
			'nette.templateFactory' => 'latte.templateFactory',
			'nette.userStorage' => 'security.userStorage',
			'router' => 'routing.router',
			'session' => 'session.session',
			'user' => 'security.user',
		],
	];


	public function __construct(array $params = [])
	{
		$this->parameters = $params;
		$this->parameters += [
			'appDir' => '/data/web/virtuals/205013/virtual/www/subdom/apps/socialHelper/app',
			'wwwDir' => '/data/web/virtuals/205013/virtual/www/subdom/apps/socialHelper/www',
			'debugMode' => false,
			'productionMode' => true,
			'consoleMode' => false,
			'tempDir' => '/data/web/virtuals/205013/virtual/www/subdom/apps/socialHelper/app/../temp',
			'authenticate' => [
				'login' => '74ZTP18EPQwEV7R98dUtf4oAf4aCBLpaFP0dNbLK25xJNH94Zt',
				'password' => 'HPz3cyfXHFYTNM2RAgLasL5A65wRVABqeboIiuURlYBEVKtCaQ',
			],
			'youtube' => [
				'url' => 'https://www.googleapis.com/youtube/v3/',
				'apiKey' => 'AIzaSyCiBHXj2XvDmEu7PClr1PIq02FC8ahoZTk',
			],
		];
	}


	public function createServiceApplication__1(): App\Presenters\HomepagePresenter
	{
		$service = new App\Presenters\HomepagePresenter($this->getService('2'), $this->getService('3'), $this->getService('4'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('routing.router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__2(): App\Presenters\ErrorPresenter
	{
		$service = new App\Presenters\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	public function createServiceApplication__3(): App\Presenters\Error4xxPresenter
	{
		$service = new App\Presenters\Error4xxPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('routing.router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__4(): NetteModule\ErrorPresenter
	{
		$service = new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	public function createServiceApplication__5(): NetteModule\MicroPresenter
	{
		$service = new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('routing.router'));
		return $service;
	}


	public function createServiceApplication__application(): Nette\Application\Application
	{
		$service = new Nette\Application\Application(
			$this->getService('application.presenterFactory'),
			$this->getService('routing.router'),
			$this->getService('http.request'),
			$this->getService('http.response')
		);
		$service->catchExceptions = true;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationTracy\RoutingPanel::initializePanel($service);
		return $service;
	}


	public function createServiceApplication__linkGenerator(): Nette\Application\LinkGenerator
	{
		$service = new Nette\Application\LinkGenerator(
			$this->getService('routing.router'),
			$this->getService('http.request')->getUrl(),
			$this->getService('application.presenterFactory')
		);
		return $service;
	}


	public function createServiceApplication__presenterFactory(): Nette\Application\IPresenterFactory
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback($this, 1, null));
		$service->setMapping(['*' => 'App\*Module\Presenters\*Presenter']);
		return $service;
	}


	public function createServiceCache__journal(): Nette\Caching\Storages\IJournal
	{
		$service = new Nette\Caching\Storages\SQLiteJournal('/data/web/virtuals/205013/virtual/www/subdom/apps/socialHelper/app/../temp/cache/journal.s3db');
		return $service;
	}


	public function createServiceCache__storage(): Nette\Caching\IStorage
	{
		$service = new Nette\Caching\Storages\FileStorage(
			'/data/web/virtuals/205013/virtual/www/subdom/apps/socialHelper/app/../temp/cache',
			$this->getService('cache.journal')
		);
		return $service;
	}


	public function createServiceContainer(): Nette\DI\Container
	{
		return $this;
	}


	public function createServiceHttp__context(): Nette\Http\Context
	{
		$service = new Nette\Http\Context($this->getService('http.request'), $this->getService('http.response'));
		trigger_error('Service http.context is deprecated.', 16384);
		return $service;
	}


	public function createServiceHttp__request(): Nette\Http\Request
	{
		$service = $this->getService('http.requestFactory')->createHttpRequest();
		return $service;
	}


	public function createServiceHttp__requestFactory(): Nette\Http\RequestFactory
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy([]);
		return $service;
	}


	public function createServiceHttp__response(): Nette\Http\Response
	{
		$service = new Nette\Http\Response;
		return $service;
	}


	public function createServiceLatte__latteFactory(): Nette\Bridges\ApplicationLatte\ILatteFactory
	{
		return new class ($this) implements Nette\Bridges\ApplicationLatte\ILatteFactory {
			private $container;


			public function __construct(Container_3cdf3b2709 $container)
			{
				$this->container = $container;
			}


			public function create(): Latte\Engine
			{
				$service = new Latte\Engine;
				$service->setTempDirectory('/data/web/virtuals/205013/virtual/www/subdom/apps/socialHelper/app/../temp/cache/latte');
				$service->setAutoRefresh(false);
				$service->setContentType('html');
				Nette\Utils\Html::$xhtml = false;
				return $service;
			}
		};
	}


	public function createServiceLatte__templateFactory(): Nette\Application\UI\ITemplateFactory
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory(
			$this->getService('latte.latteFactory'),
			$this->getService('http.request'),
			$this->getService('security.user'),
			$this->getService('cache.storage'),
			null
		);
		return $service;
	}


	public function createServiceMail__mailer(): Nette\Mail\IMailer
	{
		$service = new Nette\Mail\SendmailMailer;
		return $service;
	}


	public function createServiceRouting__router(): Nette\Application\IRouter
	{
		$service = App\RouterFactory::createRouter();
		return $service;
	}


	public function createServiceSecurity__passwords(): Nette\Security\Passwords
	{
		$service = new Nette\Security\Passwords;
		return $service;
	}


	public function createServiceSecurity__user(): Nette\Security\User
	{
		$service = new Nette\Security\User($this->getService('security.userStorage'));
		return $service;
	}


	public function createServiceSecurity__userStorage(): Nette\Security\IUserStorage
	{
		$service = new Nette\Http\UserStorage($this->getService('session.session'));
		return $service;
	}


	public function createServiceSession__session(): Nette\Http\Session
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('14 days');
		return $service;
	}


	public function createServiceTracy__bar(): Tracy\Bar
	{
		$service = Tracy\Debugger::getBar();
		return $service;
	}


	public function createServiceTracy__blueScreen(): Tracy\BlueScreen
	{
		$service = Tracy\Debugger::getBlueScreen();
		return $service;
	}


	public function createServiceTracy__logger(): Tracy\ILogger
	{
		$service = Tracy\Debugger::getLogger();
		return $service;
	}


	public function createService1(): App\Forms\FormFactory
	{
		$service = new App\Forms\FormFactory;
		return $service;
	}


	public function createService2(): App\Auth\Authenticate
	{
		$service = new App\Auth\Authenticate(
			'74ZTP18EPQwEV7R98dUtf4oAf4aCBLpaFP0dNbLK25xJNH94Zt',
			'HPz3cyfXHFYTNM2RAgLasL5A65wRVABqeboIiuURlYBEVKtCaQ'
		);
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('routing.router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createService3(): App\Main\Main
	{
		$service = new App\Main\Main($this->getService('5'));
		return $service;
	}


	public function createService4(): App\Main\Response
	{
		$service = new App\Main\Response;
		return $service;
	}


	public function createService5(): App\Main\Youtube\Youtube
	{
		$service = new App\Main\Youtube\Youtube('https://www.googleapis.com/youtube/v3/', 'AIzaSyCiBHXj2XvDmEu7PClr1PIq02FC8ahoZTk');
		return $service;
	}


	public function createService6(): App\Main\Instagram\Instagram
	{
		$service = new App\Main\Instagram\Instagram;
		return $service;
	}


	public function initialize()
	{
		$this->getService('http.response')->setHeader('X-Powered-By', 'Nette Framework');
		$this->getService('http.response')->setHeader('Content-Type', 'text/html; charset=utf-8');
		$this->getService('http.response')->setHeader('X-Frame-Options', 'SAMEORIGIN');
		$this->getService('session.session')->exists() && $this->getService('session.session')->start();
		Tracy\Debugger::$editorMapping = [];
		Tracy\Debugger::getLogger()->mailer = [new Tracy\Bridges\Nette\MailSender($this->getService('mail.mailer'), null), 'send'];
	}
}
