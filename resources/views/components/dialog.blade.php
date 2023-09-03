<div id="dialog" class="dialog">
    <div class="card">
        <h2 class="card_ttl">{{ $title }}</h2>
        <p class="card_text">{{ $message }}</p>
        <div class="text-end mt-3">
            <form class="bgroup" action="" method="delete">
                <input type="hidden" name="delete_id">
                <button id="dialog_close" class="btn -gray" type="button">{{ $cancel }}</button>
                <button class="btn" type="submit">{{ $action }}</button>
            </form>
        </div>
    </div>
</div>
<script>
    // 削除ダイアログ
    function delete_dialog(id) {
        $('#dialog').fadeIn().css('display', 'flex');
        $('[name="delete_id"]').val(id);
    }
    $('#dialog, #dialog_close').on('click', function (e) {
        if (e.target !== e.currentTarget) return;
        $('#dialog').fadeOut();
        $('[name="delete_id"]').val('');
    });
</script>