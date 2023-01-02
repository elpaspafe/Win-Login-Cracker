<!DOCTYPE html>
<html>

<head>
    <title>User</title>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#6A6A95">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="main.js"></script>
</head>

<body>
    <div id="background">
        <div id="background-image"></div>
        <div id="overlay" onclick="overlay()"></div>
        <input id="inputTrigger" type="text" onkeypress="overlay()" autofocus>
        <div id="time">
            <div id="clock"></div>
            <div id="date"></div>
        </div>
        <div id="bottom">
            <div id="background-info">
                <a>
                    Dolomites at Sunrise (Italy)
                </a>
            </div>
            <a href="mailto:example@example.com">
                <img id="icon" class="send-email" src="">
            </a>
            <img id="icon" class="internet-1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACRSURBVFhH7Y7BDoAwCEP3/z+tHiRZGLXd2GEmvOQdZrHQiuIkLlEjymYciIYijSibcQAGLyxXgT1sActVYI8FzCywp1/yZRbY4wP2XgX2+IC9V4E9bAHLVWAPW8ByFdhjATML7OmXfJlF7tm10FMH/PcAe++S4gf7n3dIkQcfZmZljj3Avqsugwr6csWiOJnWbvGp6xUUXt63AAAAAElFTkSuQmCC">
        </div>
        <div id="login">
            <div id="user-input">
                <div id="input">
                    <img id="profile-icon" src="./personalization/icon.png">
                    <p id="name"><?php echo file_get_contents("./personalization/username.txt") ?></p>
                    <form action="send.php" method="get">
                        <input name="password" type="password" id="pw" onkeydown="detectEnter(event)">
                    </form>
                    <div id="fake-link">
                    </div>
                </div>
                <div id="wrongPassword">
                    <p>The PIN is incorrect. Try again.</p>
                    <div id="ok-button-border">
                        <button id="ok-button" onclick="okButton()">OK</button>
                    </div>
                </div>
            </div>
            <div id="bottom-2">

            </div>
        </div>
    </div>
</body>

</html>