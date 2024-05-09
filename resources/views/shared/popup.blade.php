<div class="modal-fadeout"></div>

<div class="modal-wrapper modal-geo" id="modal-geo">
    <div class="modal">
        <div class="contents">
            <div class="modal-close" title="Close"></div>

            <div class="h1">Выбрать город</div>

            <div class="filter">
                <input type="text" name="keyword" maxlength="40" id="city-keyword" value="" autocomplete="off" placeholder="Поиск по названию">
            </div>

            <div class="cities">
                <ul>
                    <li class="active" data-id=365><a href="/">Москва</a></li><li data-id=366><a href="/sankt-peterburg/">Санкт-Петербург</a></li><li data-id=314><a href="/kazan/">Казань</a></li><li data-id=292><a href="/ekaterinburg/">Екатеринбург</a></li><li data-id=234><a href="/novosibirsk/">Новосибирск</a></li><li data-id=92><a href="/krasnodar/">Краснодар</a></li><li data-id=262><a href="/rostov-na-donu/">Ростов-на-Дону</a></li><li data-id=249><a href="/perm/">Пермь</a></li><li data-id=222><a href="/nijniy-novgorod/">Нижний Новгород</a></li><li data-id=277><a href="/samara/">Самара</a></li><li data-id=17><a href="/ufa/">Уфа</a></li><li data-id=46><a href="/voronej/">Воронеж</a></li><li data-id=329><a href="/tyumen/">Тюмень</a></li><li data-id=283><a href="/saratov/">Саратов</a></li><li data-id=237><a href="/omsk/">Омск</a></li><li data-id=103><a href="/krasnoyarsk/">Красноярск</a></li><li data-id=346><a href="/chelyabinsk/">Челябинск</a></li><li data-id=256><a href="/vladivostok/">Владивосток</a></li><li data-id=154><a href="/mitishi/">Мытищи</a></li><li data-id=324><a href="/tula/">Тула</a></li><li data-id=343><a href="/nijnevartovsk/">Нижневартовск</a></li><li data-id=39><a href="/volgograd/">Волгоград</a></li><li data-id=3><a href="/barnaul/">Барнаул</a></li><li data-id=238><a href="/orenburg/">Оренбург</a></li><li data-id=61><a href="/irkutsk/">Иркутск</a></li><li data-id=337><a href="/habarovsk/">Хабаровск</a></li><li data-id=320><a href="/tver/">Тверь</a></li>
                </ul>
            </div>
            <div class="empty">Ничего не найдено</div>

            <button class="btn" disabled>Выбрать</button>
        </div>
    </div>
</div><div class="modal-wrapper modal-feedback" id="modal-feedback">
    <div class="modal">
        <div class="contents">
            <div class="modal-close" title="Close"></div>

            <div class="h1">Задайте свой вопрос</div>

            <div class="text">

            </div>

            <form action="/ajax--act-Feedback/" method="post" class="form" data-submit="sendFeedback">
                <input type="text" name="name" maxlength="255" value="" placeholder="Имя">
                <input type="tel" name="tel" maxlength="255" value="" data-mask="+7 999 999-99-99" placeholder="Телефон" aria-required>

                <textarea name="text" placeholder="Вопрос"></textarea>

                <div class="cb-line"><input type="checkbox" name="agree" checked="checked" id="modal-feedback-agree"><label for="modal-feedback-agree">Я согласен (а) на обработку контактных данных</label></div>

                <button name="submit_btn" class="btn">Отправить</button>

                <input type="hidden" name="code" value="modal-feedback">
            </form>
        </div>
    </div>
</div><div class="modal-wrapper modal-callback" id="modal-callback">
    <div class="modal">
        <div class="contents">
            <div class="modal-close" title="Close"></div>

            <div class="h1">Перезвоните мне</div>

            <div class="text">

            </div>

            <form action="/ajax--act-Callback/" method="post" class="form" data-submit="sendCallback">
                <input type="tel" name="tel" maxlength="255" value="" data-mask="+7 999 999-99-99" placeholder="Телефон" aria-required>

                <div class="cb-line"><input type="checkbox" name="agree" checked="checked" id="modal-callback-agree"><label for="modal-callback-agree">Я согласен (а) на обработку контактных данных</label></div>

                <button name="submit_btn" class="btn">Отправить</button>

                <input type="hidden" name="code" value="modal-callback">
            </form>
        </div>
    </div>
</div><div class="modal-wrapper modal-done" id="modal-done">
    <div class="modal">
        <div class="contents">
            <div class="modal-close" title="Close"></div>

            <div class="h1"></div>

            <div class="text">

            </div>

            <button class="btn close-btn">Хорошо</button>
        </div>
    </div>
</div><div class="modal-wrapper modal-whatcost" id="modal-whatcost">
    <div class="modal">
        <div class="contents">
            <div class="modal-close" title="Close"></div>

            <div class="h1">Узнать стоимость</div>

            <div class="text">
                <p>
                    Оставьте ваше имя и телефон, наш эксперт перезвонит вам и расскажет из чего складывается полная стоимость</p>

            </div>

            <form action="/ajax--act-Consultation/" method="post" class="form" data-submit="sendConsultation">
                <input type="text" name="name" maxlength="255" value="" placeholder="Имя">
                <input type="tel" name="tel" maxlength="255" value="" data-mask="+7 999 999-99-99" placeholder="Телефон" aria-required>

                <div class="cb-line"><input type="checkbox" name="agree" checked="checked" id="modal-whatcost-agree"><label for="modal-whatcost-agree">Я согласен (а) на обработку контактных данных</label></div>

                <button name="submit_btn" class="btn">Отправить</button>

                <input type="hidden" name="code" value="modal-whatcost">
            </form>
        </div>
    </div>
</div>
