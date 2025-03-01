function requestModal() {
    var category = $('#service').val();
    console.log(category);

    document.getElementById('service-title').innerHTML = 'Getting quotes for ' + category
    $('#postRequestModal').modal('show');
    //get all serviceses for chosen category
    $.ajax({
        url: '/get-services',
        type: 'GET',
        data: { id: category }  // 'category' should be a variable that holds the selected category
    }).done(function(res) {
        console.log('Servics : ',res[0].services);

        res = res[0].services

        // Get the container where checkboxes will be displayed
        var checks = document.getElementById('service-checkboxes');

        // Clear any existing checkboxes in the container
        checks.innerHTML = '';

        // Loop through the services returned in the response (res)
        res.forEach(function(service, index) {
            // Create a div for each checkbox
            console.log(service[0], ' Index : ' + index)
            var checkboxDiv = document.createElement('div');
            checkboxDiv.classList.add('form-check', 'd-flex');

            // Create the checkbox input element
            var checkboxInput = document.createElement('input');
            checkboxInput.classList.add('form-check-input', 'mg-2');
            checkboxInput.type = 'checkbox';
            checkboxInput.id = 'serviceCheckbox' + index;  // Unique ID for each checkbox

            // Create the label for the checkbox
            var checkboxLabel = document.createElement('label');
            checkboxLabel.classList.add('form-check-label', 'ms-2');
            checkboxLabel.setAttribute('for', checkboxInput.id);
            checkboxLabel.textContent = service.name;  // Assuming the service object has a 'name' property

            // Append the input and label to the checkbox div
            checkboxDiv.appendChild(checkboxInput);
            checkboxDiv.appendChild(checkboxLabel);

            // Append the checkbox div to the checks container
            checks.appendChild(checkboxDiv);
        });
    }).fail(function(res) {
        console.log(res.responseText);
    });


}
