<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BOOKING PAGE</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <br>
  <div class="container">
    <div class="text-center mb-4">
      <h3> RESERVE WITH US NOW! </h3>
    </div>
    <div class="container d-flex justify-content-center">
      <div>
        <form action="connection.php" method="post" style="width:50vw; min-width:300px;">
          <div class="row">
            <div class="col">
              <label class="form-label">Name:</label>
              <input type="text" class="form-control" name="Client_Name" placeholder="Full Name">
            </div>
            <div class="col">
              <label class="form-label">Email:</label>
              <input type="email" class="form-control" name="Client_Email" placeholder="username@gmail.com">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label class="form-label">Mobile:</label>
              <input type="number" class="form-control" name="Mobile_Number" placeholder="09123456789">
            </div>
            <div class="col">
              <label class="form-label">Check-In:</label>
              <input type="date" class="form-control" name="Check_In_Date" placeholder="">
            </div>
            <div class="col">
              <label class="form-label">Check-Out:</label>
              <input type="date" class="form-control" name="Check_Out_Date" placeholder="">
            </div>
          </div>
          <br>
          <div class="form-floating">
            <select id="select" class="form-select" name="Expected_Guest">
              <option value="6">6 pax/ Below</option>
              <option value="12">7 - 12 pax</option>
              <option value="18">13 - 18 pax</option>
              <option value="24">19 - 24 pax</option>
            </select>
            <label for="select">Select Expected Guest</label>
          </div>
          <br>
          <div class="col">
            <label class="form-label">Payment Ref Number:</label>
            <input type="text" class="form-control" name="Reference" placeholder="">
          </div>
          <br>
          <div>
            <button type="submit" class="btn btn-success" name="submit">Submit</button>
            <a href="admin/login system/user_page.php" class="btn btn-danger" name="">Cancel</a>
          </div>
        </form>
        <div id="price" class="mt-3"></div>
      </div>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
  // Define prices for each category of guests
  const prices = {
    6: 12000,   // Price for 6 pax or below
    12: 13000,  // Price for 7 - 12 pax
    18: 18000,  // Price for 13 - 18 pax
    24: 24000   // Price for 19 - 24 pax
  };

  // Function to update the price based on the selected number of guests
  function updatePrice() {
    const select = document.getElementById('select');
    const selectedOption = select.options[select.selectedIndex];
    const price = prices[selectedOption.value];
    const priceElement = document.getElementById('price');
    priceElement.textContent = `Price: ₱${price}`;
  }

  // Listen for changes in the select element
  document.getElementById('select').addEventListener('change', updatePrice);

  // Initial update of price when page loads
  updatePrice();
</script>
</body>
</html>
