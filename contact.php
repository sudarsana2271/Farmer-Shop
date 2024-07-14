<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Farmer's Shop</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
  
  body
 {
    box-sizing: border-box;
    margin: 3;
    padding: 3;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f5f5f5;
    margin: 1;
    padding: 20px;
    
}

header {
    background-color: #4CAF50;
    color: #fff;
    text-align: center;
    padding: 10px 0;
}

header h1 {
    margin: 0;
    font-size: 3em;
}

main {
    max-width: 800px;
    margin: 20px auto;
    background-color:lightlightergray;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 8px 8px 8px rgba(0,0,0,0.1);
}

.contact-form, .contact-info {
    margin-bottom: 30px;
}

.contact-form h2, .contact-info h2 {
    font-size: 1.3em;
    margin-bottom: 10px;
    width: 95%;
    padding: 6px;
    font-size: 2em;
    border: 2px solid #ccc;
    border-radius: 3px;
    background-color: lightseagreen;
    box-shadow: 8px 8px 8px rgba(0,0,0,0.1);
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
textarea {
    width: 95%;
    padding: 8px;
    font-size: 1em;
    border: 3px solid #ccc;
    border-radius: 3px;
}

textarea {
    resize: vertical;
}

button {
    background-color: #4CAF50;
    color: white;
    width: 30%;
    padding: 15px 15px;
    border: 3px;
    border-radius: 3px;
    cursor: pointer;
    font-size: 1.3em;
    box-shadow: 8px 8px 8px rgba(0,0,0,0.1);
}

button:hover {
    background-color: lightblue;
}

footer {
    text-align: center;
    margin-top: 20px;
    padding: 1px 0;
    background-color:gray;
    color: #fff;
}
.map h1{
    background-color: #4CAF50;
    color: white;
    text-align: center;
    padding: 20px ;
    font-size: 2em;
}

</style>

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <header>
        <h1>Contact Us</h1>
    </header>
    
    <main>
        <section class="contact-form">
            <h2>Send us a message</h2>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="form-control border-4" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control border-4" required>
                </div>
                <div class="form-group">
                    <label for="Phone Number">Phone Number :</label>
                    <input type="number" id="PhoneNumber" name="Phone Number" class="form-control border-4" required>
                </div>
                <div class="form-group">
                    <label for="Address">Address:</label>
                    <input type="text" id="Address" name="Address" class="form-control border-4" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" class="form-control border-4" required></textarea>
                </div>
                <button type="submit">Send Message</button>
            </form>
        </section>

        <section class="contact-info">
            <h2>Contact Information</h2>
            <p><strong>Address:</strong> 213 Action Area 1, Farmers City, PO-BidhanNagar</p>
            <p><strong>Phone:</strong> 91-9382952926</p>
            <p><strong>Email:</strong> info@farmersmarket.com</p>
        </section>

        <div class="card map1">
    <section class="map">
            <h1>Find Us Here</h1>
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345097397!2d144.95373531531673!3d-37.81720997975171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577b9b2ef6e39b1!2s123%20Pet%20Adoption%20Street%2C%20Pet%20City%2C%20PA%2012345!5e0!3m2!1sen!2sus!4v1623076298577!5m2!1sen!2sus"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>
        </div>
    </main>

        <!-- <div class="card map1">
    <section class="map">
            <h1>Find Us Here</h1>
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345097397!2d144.95373531531673!3d-37.81720997975171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577b9b2ef6e39b1!2s123%20Pet%20Adoption%20Street%2C%20Pet%20City%2C%20PA%2012345!5e0!3m2!1sen!2sus!4v1623076298577!5m2!1sen!2sus"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>
        </div> -->
    <footer>
        <p>&copy; 2024 Local Farmer's Market. All rights reserved.</p>
    </footer>
</body>
</html>
