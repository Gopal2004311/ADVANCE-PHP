<!----1) Write Ajax program to get player details from player table by inserting a player name at run 
time display it’s details in tabular form .Consider ,
player (Country, player_name, wickets, runs).--->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <script src="Q1_displayPlayerDetails.js" defer></script>
</head>
<body>
    <div class="content">
        <div class="heading">
            <h2>Display details of player!!</h2>
        </div>
        <div class="form-content">
            <form>
                <div class="form-element">
                    <label for="player">Enter player name:</label>
                    <input type="text" name="name" id="player">
                </div>
                <div class="form-element">
                    <input type="submit" value="submit" name="submit" id="submit">
                </div>
            </form>
        </div>
    </div>
    <div class="output">
        <div class="head">
            <h3>The details of player that you have entered...</h3>
        </div>
        <div id="player-table"></div>
    </div>
</body>
</html>