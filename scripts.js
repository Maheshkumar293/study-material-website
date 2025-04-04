// Load materials for guest view
function loadMaterials() {
    fetch('get_materials.php')
        .then(response => response.json())
        .then(materials => {
            const materialsList = document.getElementById('materials-list');
            materialsList.innerHTML = '';
            
            materials.forEach(material => {
                const card = document.createElement('div');
                card.className = 'material-card';
                card.innerHTML = `
                    <h3>${material.title}</h3>
                    <p>${material.description}</p>
                    <a href="uploads/${material.filename}" class="download-btn" download>Download</a>
                `;
                materialsList.appendChild(card);
            });
        })
        .catch(error => console.error('Error:', error));
}

// Load materials for admin view
function loadAdminMaterials() {
    fetch('get_materials.php')
        .then(response => response.json())
        .then(materials => {
            const materialsTable = document.getElementById('materials-table');
            materialsTable.innerHTML = '';
            
            materials.forEach(material => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${material.title}</td>
                    <td>${material.description}</td>
                    <td>
                        <button onclick="deleteMaterial(${material.id})" class="delete-btn">Delete</button>
                    </td>
                `;
                materialsTable.appendChild(row);
            });
        })
        .catch(error => console.error('Error:', error));
}

// Delete material
function deleteMaterial(id) {
    if (confirm('Are you sure you want to delete this material?')) {
        fetch('delete_material.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `id=${id}`
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                loadAdminMaterials();
            }
        })
        .catch(error => console.error('Error:', error));
    }
}