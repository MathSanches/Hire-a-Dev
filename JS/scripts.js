document.getElementById('menuToggle').addEventListener('click', function() {
    const navbar = document.getElementById('navbar');
    navbar.style.display = navbar.style.display === 'block' ? 'none' : 'block';
  });
  
  document.getElementById('programmerForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const nome = document.getElementById('nome').value;
    const email = document.getElementById('email').value;
    const linguagens = document.getElementById('linguagens').value;
  
    const table = document.getElementById('programmersTable').getElementsByTagName('tbody')[0];
    const newRow = table.insertRow();
  
    const cell1 = newRow.insertCell(0);
    const cell2 = newRow.insertCell(1);
    const cell3 = newRow.insertCell(2);
  
    cell1.textContent = nome;
    cell2.textContent = email;
    cell3.textContent = linguagens;
  
    document.getElementById('programmerForm').reset();
  
    alert('Suas informações foram adicionadas com sucesso!');
  });
  