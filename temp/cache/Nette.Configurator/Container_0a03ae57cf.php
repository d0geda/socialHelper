<?php
// source: /data/web/virtuals/205013/virtual/www/subdom/apps/socialHelper/app/config/config.neon 
// source: /data/web/virtuals/205013/virtual/www/subdom/apps/socialHelper/app/config/config.local.neon 

class Container_0a03ae57cf extends Nette\DI\Container
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
			'App\Presenters\BasePresenter' => [1 => ['2', 'application.1', 'application.2']],
			'Nette\Application\UI\Presenter' => [['2', 'application.1', 'application.2']],
			'Nette\Application\UI\Control' => [['2', 'application.1', 'application.2']],
			'Nette\Application\UI\Component' => [['2', 'application.1', 'application.2']],
			'Nette\ComponentModel\Container' => [['2', 'application.1', 'application.2']],
			'Nette\ComponentModel\Component' => [['2', 'application.1', 'application.2']],
			'Nette\Application\UI\IRenderable' => [['2', 'application.1', 'application.2']],
			'Nette\ComponentModel\IContainer' => [['2', 'application.1', 'application.2']],
			'Nette\ComponentModel\IComponent' => [['2', 'application.1', 'application.2']],
			'Nette\Application\UI\ISignalReceiver' => [['2', 'application.1', 'application.2']],
			'Nette\Application\UI\IStatePersistent' => [['2', 'application.1', 'application.2']],
			'ArrayAccess' => [['2', 'application.1', 'application.2']],
			'Nette\Application\IPresenter' => [['2', 'application.1', 'application.2', 'application.3', 'application.4', 'application.5']],
			'App\Auth\Authenticate' => [1 => ['2']],
			'App\Main\Main' => [1 => ['3']],
			'App\Main\Response' => [1 => ['4']],
			'App\Main\Inhert' => [1 => ['5', '6']],
			'App\Main\Youtube\Youtube' => [1 => ['5']],
			'App\Main\Instagram\Instagram' => [1 => ['6']],
			'App\Presenters\HomepagePresenter' => [1 => ['application.1']],
			'App\Presenters\Error4xxPresenter' => [1 => ['application.2']],
			'App\Presenters\ErrorPresenter' => [1 => ['application.3']],
			'NetteModule\ErrorPresenter' => [1 => ['application.4']],
			'NetteModule\MicroPresenter' => [1 => ['application.5']],
			'Nette\DI\Container' => [1 => ['container']],
		],
		'services' => [
			'application.1' => 'App\Presenters\HomepagePresenter',
			'application.2' => 'App\Presenters\Error4xxPresenter',
			'application.3' => 'App\Presenters\ErrorPresenter',
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
				'application.2' => 'App\Presenters\Error4xxPresenter',
				'application.3' => 'App\Presenters\ErrorPresenter',
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


	/**
	 * @return App\Presenters\HomepagePresenter
	 */
	public function createServiceApplication__1()
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


	/**
	 * @return App\Presenters\Error4xxPresenter
	 */
	public function createServiceApplication__2()
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


	/**
	 * @return App\Presenters\ErrorPresenter
	 */
	public function createServiceApplication__3()
	{
		$service = new App\Presenters\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	/**
	 * @return NetteModule\ErrorPresenter
	 */
	public function createServiceApplication__4()
	{
		$service = new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	/**
	 * @return NetteModule\MicroPresenter
	 */
	public function createServiceApplication__5()
	{
		$service = new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('routing.router'));
		return $service;
	}


	/**
	 * @return Nette\Application\Application
	 */
	public function createServiceApplication__application()
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


	/**
	 * @return Nette\Application\LinkGenerator
	 */
	public function createServiceApplication__linkGenerator()
	{
		$service = new Nette\Application\LinkGenerator(
			$this->getService('routing.router'),
			$this->getService('http.request')->getUrl(),
			$this->getService('application.presenterFactory')
		);
		return $service;
	}


	/**
	 * @return Nette\Application\IPresenterFactory
	 */
	public function createServiceApplication__presenterFactory()
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback($this, 1, null));
		$service->setMapping(['*' => 'App\*Module\Presenters\*Presenter']);
		return $service;
	}


	/**
	 * @return Nette\Caching\Storages\IJournal
	 */
	public function createServiceCache__journal()
	{
		$service = new Nette\Caching\Storages\SQLiteJournal('/data/web/virtuals/205013/virtual/www/subdom/apps/socialHelper/app/../temp/cache/journal.s3db');
		return $service;
	}


	/**
	 * @return Nette\Caching\IStorage
	 */
	public function createServiceCache__storage()
	{
		$service = new Nette\Caching\Storages\FileStorage(
			'/data/web/virtuals/205013/virtual/www/subdom/apps/socialHelper/app/../temp/cache',
			$this->getService('cache.journal')
		);
		return $service;
	}


	/**
	 * @return Nette\DI\Container
	 */
	public function createServiceContainer()
	{
		return $this;
	}


	/**
	 * @return Nette\Http\Context
	 */
	public function createServiceHttp__context()
	{
		$service = new Nette\Http\Context($this->getService('http.request'), $this->getService('http.response'));
		trigger_error('Service http.context is deprecated.', 16384);
		return $service;
	}


	/**
	 * @return Nette\Http\Request
	 */
	public function createServiceHttp__request()
	{
		$service = $this->getService('http.requestFactory')->createHttpRequest();
		if (!$service instanceof Nette\Http\Request) {
			throw new Nette\UnexpectedValueException('Unable to create service \'http.request\', value returned by factory is not Nette\Http\Request type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Http\RequestFactory
	 */
	public function createServiceHttp__requestFactory()
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy([]);
		return $service;
	}


	/**
	 * @return Nette\Http\Response
	 */
	public function createServiceHttp__response()
	{
		$service = new Nette\Http\Response;
		return $service;
	}


	/**
	 * @return Nette\Bridges\ApplicationLatte\ILatteFactory
	 */
	public function createServiceLatte__latteFactory()
	{
		return new Container_0a03ae57cf_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory($this);
	}


	/**
	 * @return Nette\Application\UI\ITemplateFactory
	 */
	public function createServiceLatte__templateFactory()
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


	/**
	 * @return Nette\Mail\IMailer
	 */
	public function createServiceMail__mailer()
	{
		$service = new Nette\Mail\SendmailMailer;
		return $service;
	}


	/**
	 * @return Nette\Application\IRouter
	 */
	public function createServiceRouting__router()
	{
		$service = App\RouterFactory::createRouter();
		if (!$service instanceof Nette\Application\IRouter) {
			throw new Nette\UnexpectedValueException('Unable to create service \'routing.router\', value returned by factory is not Nette\Application\IRouter type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Security\Passwords
	 */
	public function createServiceSecurity__passwords()
	{
		$service = new Nette\Security\Passwords;
		return $service;
	}


	/**
	 * @return Nette\Security\User
	 */
	public function createServiceSecurity__user()
	{
		$service = new Nette\Security\User($this->getService('security.userStorage'));
		return $service;
	}


	/**
	 * @return Nette\Security\IUserStorage
	 */
	public function createServiceSecurity__userStorage()
	{
		$service = new Nette\Http\UserStorage($this->getService('session.session'));
		return $service;
	}


	/**
	 * @return Nette\Http\Session
	 */
	public function createServiceSession__session()
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('14 days');
		return $service;
	}


	/**
	 * @return Tracy\Bar
	 */
	public function createServiceTracy__bar()
	{
		$service = Tracy\Debugger::getBar();
		if (!$service instanceof Tracy\Bar) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.bar\', value returned by factory is not Tracy\Bar type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\BlueScreen
	 */
	public function createServiceTracy__blueScreen()
	{
		$service = Tracy\Debugger::getBlueScreen();
		if (!$service instanceof Tracy\BlueScreen) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.blueScreen\', value returned by factory is not Tracy\BlueScreen type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\ILogger
	 */
	public function createServiceTracy__logger()
	{
		$service = Tracy\Debugger::getLogger();
		if (!$service instanceof Tracy\ILogger) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.logger\', value returned by factory is not Tracy\ILogger type.');
		}
		return $service;
	}


	/**
	 * @return App\Forms\FormFactory
	 */
	public function createService1()
	{
		$service = new App\Forms\FormFactory;
		return $service;
	}


	/**
	 * @return App\Auth\Authenticate
	 */
	public function createService2()
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


	/**
	 * @return App\Main\Main
	 */
	public function createService3()
	{
		$service = new App\Main\Main($this->getService('5'));
		return $service;
	}


	/**
	 * @return App\Main\Response
	 */
	public function createService4()
	{
		$service = new App\Main\Response;
		return $service;
	}


	/**
	 * @return App\Main\Youtube\Youtube
	 */
	public function createService5()
	{
		$service = new App\Main\Youtube\Youtube('https://www.googleapis.com/youtube/v3/', 'AIzaSyCiBHXj2XvDmEu7PClr1PIq02FC8ahoZTk');
		return $service;
	}


	/**
	 * @return App\Main\Instagram\Instagram
	 */
	public function createService6()
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



class Container_0a03ae57cf_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory implements Nette\Bridges\ApplicationLatte\ILatteFactory
{
	private $container;


	public function __construct(Container_0a03ae57cf $container)
	{
		$this->container = $container;
	}


	public function create()
	{
		$service = new Latte\Engine;
		$service->setTempDirectory('/data/web/virtuals/205013/virtual/www/subdom/apps/socialHelper/app/../temp/cache/latte');
		$service->setAutoRefresh(false);
		$service->setContentType('html');
		Nette\Utils\Html::$xhtml = false;
		return $service;
	}
}
