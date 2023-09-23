</main>

<script>
  document.addEventListener('click', function (event) {
    const userDropdown = document.getElementById('userDropdown');
    const userDropdownButton = document.getElementById('userDropdownButton');
    const chatDropdown = document.getElementById('chatDropdown');
    const chat = document.getElementById('chat');
    const characterDropdown = document.getElementById('characterDropdown');
    const characters = document.getElementById('characters');

    if (userDropdownButton !== event.target && !userDropdownButton.contains(event.target)) {
      userDropdown.style.display = 'none';
    }

    if (chat !== event.target && !chat.contains(event.target)) {
      chatDropdown.style.display = 'none';
    }

    if (characters !== event.target && !characters.contains(event.target)) {
      ccharacterDropdown.style.display = 'none';
    }
  });

  document.getElementById("characters").addEventListener("click", function () {
    var ccharacterDropdown = document.getElementById("characterDropdown");
    if (characterDropdown.style.display === "block") {
      characterDropdown.style.display = "none";
    } else {
      characterDropdown.style.display = "block";
    }
  });

  document.getElementById("chat").addEventListener("click", function () {
    var chatDropdown = document.getElementById("chatDropdown");
    if (chatDropdown.style.display === "block") {
      chatDropdown.style.display = "none";
    } else {
      chatDropdown.style.display = "block";
    }
  });

  document.getElementById("userDropdownButton").addEventListener("click", function () {
    var userDropdown = document.getElementById("userDropdown");
    if (userDropdown.style.display === "block") {
      userDropdown.style.display = "none";
    } else {
      userDropdown.style.display = "block";
    }
  });



</script>
<!--
    <style>
      .chatDropdown {
        background-color: #CCCBCB";
      }
    </style>
    -->
</body>

</html>