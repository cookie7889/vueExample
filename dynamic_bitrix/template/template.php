<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
\Bitrix\Main\UI\Extension::load("ui.vue3");
?>

<div id="delivery" class="delivery">
	<div class="delivery__type">
		<div :class="{_active: type == 'GAZ'}" @click="type = 'GAZ'" class="delivery__type-item">
			<div class="delivery__type-img">картинка</div>
			<div class="delivery__type-name">Газель</div>
		</div>
		<div :class="{_active: type == 'GRUZ'}" @click="type = 'GRUZ'" class="delivery__type-item">
			<div class="delivery__type-img">картинка</div>
			<div class="delivery__type-name">Грузовик 3/5 т</div>
		</div>
		<div :class="{_active: type == 'MANIP'}" @click="type = 'MANIP'" class="delivery__type-item">
			<div class="delivery__type-img">картинка</div>
			<div class="delivery__type-name">Манипулятор</div>
		</div>
		<div :class="{_active: type == 'DLINN'}" @click="type = 'DLINN'" class="delivery__type-item">
			<div class="delivery__type-img">картинка</div>
			<div class="delivery__type-name">Длинномер 20 т</div>
		</div>
	</div>

	<div class="delivery__search">
		<input type="text" v-model="city">
	</div>

	<div class="delivery__wrapper">
		<div class="delivery__item _header">
			<div class="delivery__item-name">Населенный пункт</div>

			<div class="delivery__item-info" v-if="type == 'GAZ'">
				<span>Газель</span>
				<span>Газель 6м</span>
			</div>

			<div class="delivery__item-info" v-if="type == 'GRUZ'">
				<span>3 тонны</span>
				<span>5 тонн</span>
			</div>

			<div class="delivery__item-info" v-if="type == 'MANIP'">
				<span>3 тонн ман.</span>
				<span>5 тонн ман.</span>
				<span>10 тонн ман.</span>
				<span>15 тонн ман.</span>
			</div>
		</div>
		<div class="delivery__item" v-for="item in filteredList" v-if="filteredList != ''">
			<div class="delivery__item-name">
				{{item.NAME}}
				<span>{{item.PROPERTIES.KM.VALUE}} км</span>
			</div>

			<div class="delivery__item-info" v-if="type == item.PROPERTIES.GAZ.CODE">
				<span v-for="value in item.PROPERTIES.GAZ.VALUE">{{value}} ₽</span>
			</div>

			<div class="delivery__item-info" v-if="type == item.PROPERTIES.GRUZ.CODE">
				<span v-for="value in item.PROPERTIES.GRUZ.VALUE">{{value}} ₽</span>
			</div>

			<div class="delivery__item-info" v-if="type == item.PROPERTIES.MANIP.CODE">
				<span v-for="value in item.PROPERTIES.MANIP.VALUE">{{value}} ₽</span>
			</div>
		</div>

		<div class="delivery__item _empty" v-else>
			нет таких городов :(
		</div>
	</div>

	<div class="delivery__content">
		<p><b>Примечание:</b> До указанных населенных пунктов цена фиксированная, далее 30 руб. за 1км</p>

		<p><b>Данная цена включает:</b> погрузку автомобиля и доставку груза по одному адресу.Выгрузка товара осуществляется силами покупателя.Выгрузка у клиента не более 30 мин, дальше 1 мин = 10 руб.</p>

		<p>Перегруз а/м:</p>

		<ul>
			<li>от 1,6 т до 2 т доставка 50% от тарифа</li>
			<li>3,1 т до 4 т. доставка 25% от тарифа</li>
		</ul>

		<p>Сеть строительных баз «Газмет» организует доставку товаров в пределах г. Тулы, Тульской области и других областях. Доставка товара осуществляется ежедневно, в течение рабочего дня с 08.00 до 18.00, от 1 тонны до 20 тонн, также предоставляются услуги крана-манипулятора.</p>
	</div>
</div>

<script>
	getData(<?= json_encode($arResult) ?>)
</script>