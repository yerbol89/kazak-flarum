<?php namespace Qia;

use Flarum\Support\Extension as BaseExtension;
use Illuminate\Events\Dispatcher;
use Flarum\Events\RegisterLocales;

class Extension extends BaseExtension
{
    public function listen(Dispatcher $events)
    {
        $events->listen(RegisterLocales::class, function (RegisterLocales $event) {
            $event->manager->addLocale('kk', 'Kazakh');
            $event->addTranslations('kk', __DIR__.'/../locale/core.yml');
            $event->manager->addJsFile('kk', __DIR__.'/../locale/core.js');
            $event->manager->addConfig('kk', __DIR__.'/../locale/core.php');
            $event->addTranslations('kk', __DIR__.'/../locale/likes.yml');
            $event->addTranslations('kk', __DIR__.'/../locale/lock.yml');
            $event->addTranslations('kk', __DIR__.'/../locale/mentions.yml');
            $event->addTranslations('kk', __DIR__.'/../locale/pusher.yml');
            $event->addTranslations('kk', __DIR__.'/../locale/sticky.yml');
            $event->addTranslations('kk', __DIR__.'/../locale/subscriptions.yml');
            $event->addTranslations('kk', __DIR__.'/../locale/tags.yml');
        });
    }
}
