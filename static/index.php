<? \Bitrix\Main\UI\Extension::load("ui.vue3"); ?>
<section id="process" class="process">
	<div class="center">
		<div class="section__subtitle">Технологии и результат</div>
		<div class="section__title">Процесс работы</div>
		<div class="section__descriptor">Рассказываем, как происходит разработка сайта в нашей компании</div>
		<div class="process__wrapper">
			<div class="process__nav-btn _prev" :class="{_disabled: them == 1}" @click="btnPrev">
				<span>
					<svg width="34" height="15" viewBox="0 0 34 15" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M16.8605 5L28.1008 15H33.7209L16.8605 9.53674e-07L0 15H5.62016L16.8605 5Z" fill="#2F2F33" fill-opacity="0.5" />
					</svg>
				</span>
			</div>
			<div class="process__nav">
				<ol>
					<li @click="them=1" :class="{_active: them == 1}">Подготовка </li>
					<li @click="them=2" :class="{_active: them == 2}">Менеджмент </li>
					<li @click="them=3" :class="{_active: them == 3}">Аналитика </li>
					<li @click="them=4" :class="{_active: them == 4}">Веб-интеграция </li>
					<li @click="them=5" :class="{_active: them == 5}">Дизайн </li>
					<li @click="them=6" :class="{_active: them == 6}">Разработка </li>
					<li @click="them=7" :class="{_active: them == 7}">Тестирование </li>
					<li @click="them=8" :class="{_active: them == 8}">Поддержка </li>
				</ol>
			</div>
			<div class="process__slider">
				<article class="process__slider-item" :class="{_active: them == 1, _show: them == 1}">
					<div class="title" @click="them=1">
						Этап 1. Подготовка
						<span>
							<svg width="34" height="13" viewBox="0 0 34 13" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M17 4.33333L28.3333 13H34L17 0L0 13H5.66667L17 4.33333Z" fill="#2F2F33" />
							</svg>
						</span>
					</div>
					<div class="process__slider-content">
						<div class="text">
							<ol>
								<li>Проводим брифинг, выясняем специфику проекта и ваши ожидания от него.</li>
								<li>Уточняем детали и разрабатываем смету.</li>
								<li>Согласуем техническое задание и заключаем договор.</li>
							</ol>

							<p><b>Результат</b><br>
								Мы уточнили все детали и убедились, что правильно понимаем ваши цели и задачи. Этот этап
								закладывает фундамент для все дальнейшей работы и помогает вам на выходе получить именно
								то, что требуется.</p>
						</div>
						<div class="img"><img src="/site_tilda_renewal/image/illiustraciya-1.png"></div>
					</div>
				</article>
				<article class="process__slider-item" :class="{_active: them == 2, _show: them == 2}">
					<div class="title" @click="them=2">
						Этап 2. Менеджмент
						<span>
							<svg width="34" height="13" viewBox="0 0 34 13" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M17 4.33333L28.3333 13H34L17 0L0 13H5.66667L17 4.33333Z" fill="#2F2F33" />
							</svg>
						</span>
					</div>
					<div class="process__slider-content">
						<div class="text">
							<ol>
								<li>За проектом закрепляется project-менеджер.</li>
								<li>Он контролирует работу дизайнеров и разработчиков.</li>
								<li>Создается пошаговый план проекта с конкретными задачами и дедлайнами.</li>
							</ol>

							<p><b>Результат</b><br>
								Проект обретает форму, становится понятно, когда ждать результатов по той или иной
								задаче.</p>
						</div>
						<div class="img"><img src="/site_tilda_renewal/image/illiustraciya-2.png"></div>
					</div>
				</article>
				<article class="process__slider-item" :class="{_active: them == 3, _show: them == 3}">
					<div class="title" @click="them=3">
						Этап 3. Аналитика
						<span>
							<svg width="34" height="13" viewBox="0 0 34 13" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M17 4.33333L28.3333 13H34L17 0L0 13H5.66667L17 4.33333Z" fill="#2F2F33" />
							</svg>
						</span>
					</div>
					<div class="process__slider-content">
						<div class="text">
							<ol>
								<li>Проводим исследование целевой аудитории, составляем пользовательские сценарии.</li>
								<li>Разрабатываем структуру сайта.</li>
								<li>Создаем и тестируем прототип сайта.</li>
							</ol>

							<p><b>Результат</b> – разработан скелет сайта, можно приступать к дизайну.</p>
						</div>
						<div class="img"><img src="/site_tilda_renewal/image/illiustraciya-3-1.png"></div>
					</div>
				</article>
				<article class="process__slider-item" :class="{_active: them == 4, _show: them == 4}">
					<div class="title" @click="them=4">
						Этап 4. Веб-интеграция
						<span>
							<svg width="34" height="13" viewBox="0 0 34 13" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M17 4.33333L28.3333 13H34L17 0L0 13H5.66667L17 4.33333Z" fill="#2F2F33" />
							</svg>
						</span>
					</div>
					<div class="process__slider-content">
						<div class="text">
							<ol>
								<li>Настройка приложение, которое будет интегрироваться.</li>
								<li>Настройка системы со стороны сайта.</li>
								<li>Тестирование.</li>
							</ol>

							<p><b>Результат</b> – настроен обмен данными между сайтом и нужным приложением: системой 1С,
								CRM, интернет-эквайрингом и т. д.</p>
						</div>
						<div class="img"><img src="/site_tilda_renewal/image/illiustraciya-4.png"></div>
					</div>
				</article>
				<article class="process__slider-item" :class="{_active: them == 5, _show: them == 5}">
					<div class="title" @click="them=5">
						Этап 5. Дизайн
						<span>
							<svg width="34" height="13" viewBox="0 0 34 13" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M17 4.33333L28.3333 13H34L17 0L0 13H5.66667L17 4.33333Z" fill="#2F2F33" />
							</svg>
						</span>
					</div>
					<div class="process__slider-content">
						<div class="text">
							<ol>
								<li>Разрабатываем концепции дизайна.</li>
								<li>Создаем макеты страниц, продумываем все элементы, с которыми пользователь сможет
									взаимодействовать.</li>
								<li>Разрабатываем макет мобильной версии.</li>
							</ol>

							<p><b>Результат</b><br>
								Вы понимаете, как будет выглядеть сайт. Можно приступать к разработке.</p>
						</div>
						<div class="img"><img src="/site_tilda_renewal/image/illiustraciya-5.png"></div>
					</div>
				</article>
				<article class="process__slider-item" :class="{_active: them == 6, _show: them == 6}">
					<div class="title" @click="them=6">
						Этап 6. Разработка
						<span>
							<svg width="34" height="13" viewBox="0 0 34 13" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M17 4.33333L28.3333 13H34L17 0L0 13H5.66667L17 4.33333Z" fill="#2F2F33" />
							</svg>
						</span>
					</div>
					<div class="process__slider-content">
						<div class="text">
							<ol>
								<li>Проектируем архитектуру сайта.</li>
								<li>Верстаем страницы.</li>
								<li>Разрабатываем функционал.</li>
								<li>Настраиваем работу сервера.</li>
							</ol>

							<p><b>Результат</b><br>
								Сайт работоспособен и почти готов к запуску.</p>
						</div>
						<div class="img"><img src="/site_tilda_renewal/image/illiustraciya-6.png"></div>
					</div>
				</article>
				<article class="process__slider-item" :class="{_active: them == 7, _show: them == 7}">
					<div class="title" @click="them=7">
						Этап 7. Тестирование
						<span>
							<svg width="34" height="13" viewBox="0 0 34 13" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M17 4.33333L28.3333 13H34L17 0L0 13H5.66667L17 4.33333Z" fill="#2F2F33" />
							</svg>
						</span>
					</div>
					<div class="process__slider-content">
						<div class="text">
							<ol>
								<li>Проверяем работоспособность всех элементов.</li>
								<li>Выясняем, сможет ли сайт работать при высоких нагрузках.</li>
								<li>Проверяем, как работает административная часть сайта.</li>
							</ol>

							<p><b>Результат</b><br>
								Все готово, сайт запущен и готов принимать посетителей.</p>
						</div>
						<div class="img"><img src="/site_tilda_renewal/image/testirovanie-min.png" style="margin-top: -25px;"></div>
					</div>
				</article>
				<article class="process__slider-item" :class="{_active: them == 8, _show: them == 8}">
					<div class="title" @click="them=8">
						Этап 8. Поддержка
						<span>
							<svg width="34" height="13" viewBox="0 0 34 13" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M17 4.33333L28.3333 13H34L17 0L0 13H5.66667L17 4.33333Z" fill="#2F2F33" />
							</svg>
						</span>
					</div>
					<div class="process__slider-content">
						<div class="text">
							<ol>
								<li>По согласованию выполняем ежемесячные мелкие работы по сайту.</li>
								<li>Разрабатываем новые модули, поддерживаем и развиваем ресурс.</li>
								<li>Каждый месяц отчитываемся о проделанной работе.</li>
							</ol>

							<p><b>Результат</b> – сайт развивается, соответствует современным требованиям и отвечает
								запросам пользователей.</p>
						</div>
						<div class="img"><img src="/site_tilda_renewal/image/podderjkaB.png"></div>
					</div>
				</article>
			</div>
			<div class="process__nav-btn _next" :class="{_disabled: them == 8}" @click="btnNext">
				<span>
					<svg width="34" height="15" viewBox="0 0 34 15" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M16.8605 5L28.1008 15H33.7209L16.8605 9.53674e-07L0 15H5.62016L16.8605 5Z" fill="#2F2F33" fill-opacity="0.5" />
					</svg>
				</span>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	BX.Vue3.BitrixVue.createApp({
		data() {
			return {
				them: 1,
			}
		},
		methods: {
			btnPrev() {
				if (this.them > 1) this.them--
			},

			btnNext() {
				if (this.them < 8) this.them++
			}
		},
	}).mount('#process');
</script>