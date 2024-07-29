<script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        const hamBurger = document.querySelector(".text-xl");

        hamBurger.addEventListener("click",() => {
            document.querySelector("#sidebar").classList.toggle("hidden");
            document.querySelector("#sidebar").classList.toggle("flex");
        });
    </script>

<script>
    function toggleDropdown(event, dropdownId) {
        event.preventDefault();
        document.getElementById(dropdownId).classList.toggle('d-none');
    }
</script>

<script>
    document.getElementById('calculate').addEventListener('click', function() {
        // Get input values
        let amount = parseFloat(document.getElementById('amount').value) || 0;
        let loanPlanSelect = document.getElementById('lplan');
        let selectedOption = loanPlanSelect.options[loanPlanSelect.selectedIndex];
        let months = parseFloat(selectedOption.getAttribute('data-months')) || 1;
        let monthlyInterestRate = parseFloat(selectedOption.getAttribute('data-interest')) || 0;
        let penaltyRate = parseFloat(selectedOption.getAttribute('data-penalty')) || 0;

        // Calculate the total amount with fixed monthly interest
        let totalInterest = amount * (monthlyInterestRate / 100) * months;
        let totalAmount = amount + totalInterest;

        // Calculate the monthly payment
        let monthlyPayableAmount = totalAmount / months;

        // Calculate penalty amount
        let penaltyAmount = monthlyPayableAmount * (penaltyRate / 100);

        // Calculate the number of weekdays (Monday to Friday)
        let startDate = new Date(); // Assume starting today
        let endDate = new Date(startDate);
        endDate.setMonth(startDate.getMonth() + months);
        let weekdays = 0;
        while (startDate <= endDate) {
            let day = startDate.getDay();
            if (day >= 1 && day <= 5) {
                weekdays++;
            }
            startDate.setDate(startDate.getDate() + 1);
        }
        let dailyPayableAmount = totalAmount / weekdays;

        // Update the displayed values
        document.getElementById('tpa').textContent = '₱ ' + totalAmount.toFixed(2);
        document.getElementById('dpa').textContent = '₱ ' + dailyPayableAmount.toFixed(2);
        document.getElementById('pa').textContent = '₱ ' + penaltyAmount.toFixed(2);
    });
</script>
