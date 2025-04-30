<link rel="stylesheet" href="style.css">
<title>Java Login Tracker</title>
<?php include('_partials/header.html'); ?>
<body>
    <h1> Java project that utilizes Frames to track a counter of Users logged in.</h1>
    <div>
        <img src="Assets/Java/input.png" alt="input">
        <img src="Assets/Java/single.png" alt="single">
        <img src="Assets/Java/Multiple.png" alt="multiple">
    </div>
    <div>
        <h1>Code Snippets</h1>
        <h4>Logic for tracking counter</h4>
        <blockquote>    private void enterButtonClicked() {  <br>
            String name = nameField.getText().trim();  <br>
            if(!name.isEmpty()) {  <br>
                loginCounts.put(name, loginCounts.getOrDefault(name, 0)+1);  <br>
                nameField.clear();  <br>
                update();  <br>
            }  <br>
        }<br>
        private void update() {<br>
            mapArea.clear();<br>
            mapArea.appendText("Login Counts: \n");<br>
            for(Map.Entry<String, Integer> entry : loginCounts.entrySet()) {<br>
                mapArea.appendText(entry.getKey() + ": " + entry.getValue() + "\n");<br>
            }<br>       
        }</blockquote>
        <h4>Frame Data</h4>
        <blockquote> public void start(Stage stage) {<br>
            stage.setTitle("Login Tracker");<br><br>
            
            GridPane grid = new GridPane();<br>
            grid.setAlignment(Pos.TOP_CENTER);<br>
            grid.setPadding(new Insets(25, 25, 25, 25));<br>
            grid.setHgap(10);<br>
            grid.setVgap(10);<br><br>
            
            Scene scene = new Scene(grid, 400, 250);<br><br>
            
            grid.add(new Label("Enter Username:"), 0,0);<br>
            nameField = new TextField();<br>
            grid.add(nameField, 1, 0);<br><br>
            
            Button enterButton = new Button("Calculate");<br>
            enterButton.setOnAction(event -> enterButtonClicked());<br><br>
            
            Button exitButton = new Button("Exit");<br>
            exitButton.setOnAction(event -> exitButtonClicked());<br><br>
            
            HBox buttonBox = new HBox(10);<br>
            buttonBox.getChildren().add(enterButton);<br>
            buttonBox.getChildren().add(exitButton);<br>
            buttonBox.setAlignment(Pos.BOTTOM_RIGHT);<br>
            grid.add(buttonBox, 0, 1, 2, 1);<br><br>
            
            mapArea = new TextArea();<br>
            mapArea.setEditable(false);<br>
            grid.add(mapArea, 0, 2, 2,1);<br><br>
            
            stage.setScene(scene);<br>
            stage.show();<br>
        }</blockquote>
    </div>
</body>