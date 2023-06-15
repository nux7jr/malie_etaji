<?php

namespace App\Content\main;

use Illuminate\Contracts\Support\Arrayable;
use App\Structures\Image;
use App\Structures\Link;
use App\Structures\Video;

class Mortgage implements Arrayable
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
          src: 'resources/images/mortgage/famaly.jpg',
        ))->getSrc(),
        'text' => [
          __('«Семейная ипотека» — это программа жилищного кредитования для российских семей с детьми, которые могут взять в ее рамках льготную ипотеку по сниженной ставке.'),
          __('Срок действия программы продлили до 1 июля 2024-го (вместо конца 2023-го, как планировалось ранее).'),
          __('Кто может оформить льготный кредит'),
          __('Семьи с ребенком, который родился с 1 января 2018 года по 31 декабря 2023-го;'),
          __('Семьи с усыновленным ребенком, который родился с 1 января 2018 года по 31 декабря 2023-го;'),
          __('Семьи, у которых двое и более детей до 18 лет.'),
          __('Семьи с ребенком-инвалидом любого возраста. Если ребенку, родившемуся до 31 декабря 2023 года, установлена инвалидность, кредит можно оформить до 31 декабря 2027-го включительно.'),
          __('На каких условиях можно взять ипотеку'),
          __('Ставка — от 5,3%. Первоначальный взнос — 15% стоимости недвижимости.'),
          __('Сумма кредитования в Москве, Санкт-Петербурге, Московской и Ленинградской областях — до 12 млн рублей. В других регионах — до 6 млн.')
        ],
        'paramFilter' => 'family'
      ],
      [
        'image' => (new Image(
          src: 'resources/images/mortgage/gos.jpg',
        ))->getSrc(),
        'text' => [
          __('Это программа жилищного кредитования по сниженной ставке. Главное, что нужно от заёмщика, — иметь российское гражданство. Нет никаких требований к семейному положению, наличию детей, региону покупки квартиры или нынешним жилищным условиям.'),
          __('Срок действия программы продлили до 1 июля 2024-го '),
          __('ВАЖНО! С 06.01.2023 г можно оформить не более одного кредита по данной программе'),
          __('На каких условиях можно взять ипотеку'),
          __('Ставка — от 7,3%'),
          __('Первоначальный взнос — 15% стоимости недвижимости'),
          __('Сумма кредитования в Москве, Санкт-Петербурге, Московской и Ленинградской областях — до 12 млн рублей. В других регионах — до 6 млн.'),

        ],
        'paramFilter' => 'gos'
      ],
      [
        'image' => (new Image(
          src: 'resources/images/mortgage/it.jpg',
        ))->getSrc(),
        'text' => [
          __('Льготная ипотечная программа для специалистов, работающих в сфере информационных технологий'),
          __('Срок действия программы до конца 2024 г'),
          __('Кто может оформить льготный кредит'),
          __('Граждане РФ, работники аккредитованных IT-компаний. Важный нюанс — заработная плата специалиста до вычета НДФЛ должна составлять больше 70 000 рублей, для айтишников из городов-миллионников — больше 120 000 рублей, а для жителей Москвы — больше 150 000 рублей. '),
          __('На каких условиях можно взять ипотеку'),
          __('Ставка — до 5,0%.'),
          __('Первоначальный взнос — 15% стоимости недвижимости.'),
          __('Сумма кредитования 18 миллионов рублей в субъектах с населением более одного миллиона человек, для всех остальных регионов — 9 миллионов')
        ],
        'paramFilter' => 'it'
      ],
      [
        'image' => (new Image(
          src: 'resources/images/mortgage/away.jpg',
        ))->getSrc(),
        'text' => [
          __('Программа предназначена для заселения дальневосточных регионов'),
          __('Срок действия программы до конца 2030 г'),
          __('Кто может оформить льготный кредит'),
          __('Молодая семья:'),
          __('На каких условиях можно взять ипотеку'),
          __('- не старше 35 лет (вкл), состоящие в браке между собой;'),
          __('- не старше 35 лет (вкл), не состоящие в браке, имеющие ребенка до 18 лет;'),
          __('Сумма кредитования 18 миллионов рублей в субъектах с населением более одного миллиона человек, для всех остальных регионов — 9 миллионов')
        ],
        'paramFilter' => 'away'
      ],
      [
        'image' => (new Image(
          src: 'resources/images/mortgage/village.jpg',
        ))->getSrc(),
        'text' => [
          __('Программа предназначена для строительства жилья в сельской местности'),
          __('Программа действует бессрочно'),
          __('Кто может оформить льготный кредит'),
          __('Любой гражданин РФ, который планирует построить жильё в сельской местности'),
          __('На каких условиях можно взять ипотеку'),
          __('Ставка — 3,0%.'),
          __('Первоначальный взнос — от 10% стоимости недвижимости.'),
          __('Сумма кредитования до 3 миллионов рублей во всех регионах, кроме Дальнего Востока, Ленинградской области и Ямало-Ненецкого автономного округа — там до 5 миллионов рублей')
        ],
        'paramFilter' => 'village'
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
