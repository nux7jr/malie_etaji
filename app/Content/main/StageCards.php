<?php

namespace App\Content\main;

use Illuminate\Contracts\Support\Arrayable;
use App\Structures\Image;
use App\Structures\Link;
use App\Structures\Video;

class StageCards implements Arrayable
{
  /**
   * Element use App\Structures\Image for build assets
   * @var array|array[]
   */
  private static array $card_elements;
  public function __construct()
  {
    self::$card_elements = [
      [
        'image' => (new Image(
          src: 'stage/1.jpg',
        ))->getSrc(),
        'title' => __('Согласование предварительных вопросов'),
        'stage' => __('Время: 1 день'),
        'heading' => __('Что входит в 1-й этап:'),
        'list' => [
          __('Консультация по выбору материала строительства'),
          __('Подбор проекта дома при необходимости'),
          __('Предварительный расчет строительства')
        ],
        'paraf' => __('Первый этап помогает вам узнать преимущества работы с нами и ни к чему вас не обязывает')
      ],
      [
        'image' => (new Image(
          src: 'stage/2.jpg',
        ))->getSrc(),
        'title' => __('Если нужен проект, выбираем из типовых или разрабатываем индивидуальный'),
        'stage' => __('Время: от 10 дней'),
        'heading' => __('Что входит в проект:'),
        'list' => [
          __('Схема планировочной организации с расположение дома, дополнительных построек, скважины,
          септика;'),
          __('Поэтажные планы с расстановкой мебели;'),
          __('Фасады в цвете с высотными отметками;'),
          __('Реалистичные перспективные виды дома со всех сторон.')
        ],
        'paraf' => __('Также возможна переделка типового проекта под ваши пожелания')
      ],
      [
        'image' => (new Image(
          src: 'stage/3.jpg',
        ))->getSrc(),
        'title' => __('Заливка фундамента. Начало строительства'),
        'stage' => __('Время: от 14 дней'),
        'heading' => __('Какие работы производятся:'),
        'list' => [
          __('Разметка фундамента после планировки участка;'),
          __('Земляные работы (копка траншеи или котлована;'),
          __('Монтаж опалубки и арматурных каркасов;'),
          __('Заливка стен фундамента бетоном;'),
          __('Демонтаж опалубки;'),
          __('Обратная засыпка грунта.'),
        ],
        'paraf' => __('Заливка фундамент - это самый тяжелый и ответственный этап строительства дома.
        ')
      ],
      [
        'image' => (new Image(
          src: 'stage/4.jpg',
        ))->getSrc(),
        'title' => __('Возведение стен'),
        'stage' => __('Время: 20-30 дней'),
        'heading' => __('Варианты строительства в зависимости от типа материала стен:'),
        'list' => [
          __('Каркасный дом;'),
          __('Из блоков (газобетон, арболит, керамоблоки);'),
          __('Из бруса (Профилированный, Клееный, Двойной);'),
          __('Из бревна (Оцилиндрованное, Ручной рубки);'),
          __('Из кирпича; Из СИП-панелей.'),
          __('Обратная засыпка грунта.'),
        ],
        'paraf' => __('В зависимости от материала стен будет зависеть стоимость и сроки строительства коробки дома')
      ],
      [
        'image' => (new Image(
          src: 'stage/5.jpg',
        ))->getSrc(),
        'title' => __('Установка крыши'),
        'stage' => __('Время: 7-14 дней'),
        'heading' => __('Что входит в работы:'),
        'list' => [
          __('Установка стропильно системы для выбранного варианта крыши (двухскатная, вальмовая, мансардная и др.);'),
          __('Монтаж изоляционного слоя кровли;'),
          __('Монтаж кровельного материала (металлочерепица, мягкая кровля, фальцевая кровля, модульная кровля и др.)'),

        ],
        'paraf' => __('Обращаем ваше внимание, что сроки и стоимость монтажа кровли зависит от цены материалов и сложности конструкции')
      ],
      [
        'image' => (new Image(
          src: 'stage/6.jpg',
        ))->getSrc(),
        'title' => __('Внешняя отделка'),
        'stage' => __('Время: 7-14 дней'),
        'heading' => __('Что входит в работы:'),
        'list' => [
          __('Установка окон;'),
          __('Фасадные работы (вариант фасада).'),
        ],
        'paraf' => __('Работы по отделке – это финальная фаза во время возведения дома')
      ],
    ];
  }
  /**
   * @return array
   */
  public function toArray(): array
  {
    return self::$card_elements;
  }
}
