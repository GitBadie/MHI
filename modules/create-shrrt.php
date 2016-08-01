<html>
<div id="Convert" style="height: 100vh; display:block;" class="inner">
    <form action="../r/index.php" method="post">
        <div class="group">
            <input pattern=".{3,}" required title="3 characters minimum"
                   name="url" class="urlinput" type="text">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>URL to shorten</label>
            <input name="submit" class="urlsub" type="submit" value="Shrrten">
        </div>
    </form>
</div>

<div id="res txt" style="display: none;"></div>
</html>
