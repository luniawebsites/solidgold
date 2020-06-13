<?php
    $push = end(explode('?push=', $_SERVER['REQUEST_URI']));
    $message = $push.' sent to PubSubHubbub';
?>

<!DOCTYPE html>

<html lang="en">

    <form action="https://pubsubhubbub.appspot.com/publish" method="post" accept-charset="utf-8" name="form">

        <input type="hidden" name="hub.mode" value="publish">
        <input type="url" name="hub.url" value="<?= $push ?>" hidden>

    </form>

    <p><?= $message ?></p>

    <a href="https://pubsubhubbub.appspot.com/topic-details?hub.url=<?= $push ?>">Topic Details</a>

</html>

<script>

    // Auto submit the form
    document.form.submit();

    // Auto redirect to Topic Details page
    setTimeout(function () {
        var queryString="https://pubsubhubbub.appspot.com/topic-details?hub.url=<?= $push ?>";
        window.location.href = queryString;
    }, 10000);

</script>
