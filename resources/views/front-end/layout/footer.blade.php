<section class="info_section">
  <div class="info_container">
    <div class="container">
      <div class="info_top">
        <div class="info_logo text-center pt-4">
          {{-- استبدال الشعار بالنص SkyCV --}}
          <span style="font-size: 24px; font-weight: bold;" class="m-1 mb-1">SkyCV</span>
          <a href="https://www.instagram.com/alaa_7amid_/">
            <i class="fab fa-instagram" style="font-size: 24px; transform: rotate(15deg); color: white;"></i> <!-- الإبقاء على اللون الأبيض -->
          </a>
          
        </div>
        
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <p>&copy; <span id="displayDate"></span> {{__("All rights reserved. Developed with")}} <span style="color: red;">&#10084;</span>
          <a style="color: aliceblue" href="https://www.instagram.com/alaa_7amid_/">Alaa Hamid</a>
        </p>
      </div>
    </div>
    
    
    <script>
      document.getElementById("displayDate").innerText = new Date().getFullYear();
    </script>
    
  </div>
</section>

<!-- New Section with White Background -->
<section class="white_section" style="background-color: white;">
  <div class="container text-center p-3">
    {{-- <h2>Welcome to SkyCV</h2>
    <p>Our mission is to help you create the perfect CV that stands out to employers.</p>
    <p>Explore our services and enhance your career opportunities with SkyCV.</p> --}}
  </div>
</section>
