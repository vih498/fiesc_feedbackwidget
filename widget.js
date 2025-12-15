document.addEventListener('DOMContentLoaded', function () {

    if (document.getElementById('fiesc-widget')) {
        return;
    }

    console.log('FIESC widget carregado (JS simples)');

    const html = `
        <div id="fiesc-widget" style="
            position: fixed;
            bottom: 20px;
            left: 20px;
            width: 260px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,.15);
            z-index: 99999;
        ">
            <h4>Avalie o ambiente</h4>
            <select id="fiesc-rating">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <textarea id="fiesc-comment" placeholder="Comentário (opcional)" style="width:100%;margin-top:8px;"></textarea>
            <button id="fiesc-send" style="margin-top:8px;width:100%;">Enviar</button>
        </div>
    `;

    document.body.insertAdjacentHTML('beforeend', html);

    document.getElementById('fiesc-send').addEventListener('click', function () {
        fetch(M.cfg.wwwroot + '/local/fiesc/index.php', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
    },
    body:
        'rating=' + document.getElementById('fiesc-rating').value +
        '&comment=' + encodeURIComponent(document.getElementById('fiesc-comment').value) +
        '&pageurl=' + encodeURIComponent(window.location.href) +
        '&sesskey=' + M.cfg.sesskey
})
.then(response => response.json())
.then(() => {
    document.getElementById('fiesc-widget').remove();
});
    });
});
