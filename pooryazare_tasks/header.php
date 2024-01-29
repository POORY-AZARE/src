<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Car Shop</title>
    <link rel="stylesheet" href="stylesheet.css" />
  </head>
  <body>
    <header>
      <nav class="navbar">
        <div class="logo">CARSHOP WEBSITE</div>
        <div class="menu-bar">
        <ul>
            <li><a href="http://shell.hamk.fi/~poorya23000/php/pooryazare_tasks/ex1.php">EXERCISE 1</a></li>
            <li><a href="#">EXERCISE 2</a></li>
            <li><a href="#">TEXERCISE 3</a></li>
            <!-- Add more list items for additional tasks -->
        </ul>
    </div>
        <div class="nav-links">
         <a href="#vehicles">VEHICLES</a>
          <a href="#new-cars">NEW CARS</a>
          <a href="#events">EVENTS</a>
          <a href="#events">SERVICE</a>
          <a href="#events">CONTACT</a>
          <!-- More links here -->
        </div>
        <div class="language-switcher">
          <a href="?lang=en">EN</a> /
          <a href="?lang=fi">FI</a>
        </div>
      </nav>
      <!-- New Section for Special Message -->
      <div class="special-message">
        You Will Find New, little-used, luxury and Supercars in Car Shop <br />
        Find Your Perfect Vehicles
      </div>

      <!-- Existing Search Bar -->
      <div class="search-bar">
        <!-- Your existing search bar code goes here -->
      </div>

      <div class="search-bar">
        <select name="type" id="type">
          <option value="">Type</option>
          <!-- Add more option elements here -->
        </select>
        <select name="brand" id="brand">
          <option value="">Brand</option>
          <!-- Add more option elements here -->
        </select>
        <select name="model" id="model">
          <option value="">Model</option>
          <!-- Add more option elements here -->
        </select>
        <select name="price" id="price">
          <option value="">Price</option>
          <!-- Add more option elements here -->
        </select>
        <input type="text" placeholder="Search for cars..." />
        <button type="submit">Search</button>
      </div>
    </header>

    <main>