<div class="section lightgray">
    <div id="bl-feedback">
        <div class="holder">
            <h2>Задайте свой вопрос нашему эксперту</h2>

            <div class="manager">
                <div class="photo">
                    <img src="images/woman1_4(2).png" alt="Вероника Курганская" title="Вероника Курганская">
                </div>
                <div class="info">
                    <div class="intro">Меня зовут Вероника Курганская, я эксперт по СРО</div>
                    <div class="desc">Отвечу на любой вопрос в течение 20 минут</div>
                </div>
            </div>

            <form action="/ajax--act-Feedback/" method="post" class="form" data-submit="sendFeedback">
                <div class="flex">
                    <div class="col-l">
                        <input type="text" name="name" maxlength="255" value="" placeholder="Имя">
                        <input type="tel" name="tel" maxlength="255" value="" placeholder="Телефон" data-mask="+7 999 999-99-99">
                    </div>
                    <div class="col-r">
                        <textarea name="text" placeholder="Вопрос"></textarea>
                    </div>
                </div>
                <div class="flex scd">
                    <div class="cb-line"><input type="checkbox" name="agree" checked="checked" id="feedback-agree">
                        <label for="feedback-agree">Я согласен (а) на обработку контактных данных</label></div>
                    <div class="btn-line"><input type="submit" name="submit_btn" class="btn" value="Отправить"></div>
                    <input type="hidden" name="code" value="feedback">
                </div>
            </form>
        </div>
    </div>
</div>
