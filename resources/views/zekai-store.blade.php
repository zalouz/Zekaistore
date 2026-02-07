<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zekai Store</title>
    <script>
        function verifyUser() {
            // Placeholder function for user verification
            let gameId = document.getElementById('gameId').value;
            // Logic for verification
            alert('User verified for Game ID: ' + gameId);
        }

        function submitOrder() {
            // Placeholder function for order submission
            let selectedDiamonds = document.querySelectorAll('input[name="diamond"]:checked');
            let diamonds = [];
            selectedDiamonds.forEach((diamond) => {
                diamonds.push(diamond.value);
            });
            alert('Order submitted for diamonds: ' + diamonds.join(', '));
        }
    </script>
</head>
<body>
    <h1>Zekai Store</h1>
    <form>
        <label for="gameId">Game ID:</label>
        <input type="text" id="gameId" name="gameId" required>
        <h2>Select Diamonds:</h2>
        <div>
            <input type="checkbox" name="diamond" value="Diamond 1"> Diamond 1<br>
            <input type="checkbox" name="diamond" value="Diamond 2"> Diamond 2<br>
            <input type="checkbox" name="diamond" value="Diamond 3"> Diamond 3<br>
        </div>
        <button type="button" onclick="verifyUser()">Verify User</button>
        <button type="button" onclick="submitOrder()">Submit Order</button>
    </form>
</body>
</html>