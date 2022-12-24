const square = document.querySelector(".square");
const cell = document.createElement("div");
const form = document.querySelector(".form");
const userNumber = document.getElementById("userNumber");

const limit = 250;
selectedNumber = null;
arr = [];
const soldNumbers = [];

//AXIOS CALL
axios
    .get("http://localhost/rifa/api.php")
    .then((r) => {
        if (JSON.parse(JSON.stringify(r.data))) {
            $res = JSON.parse(JSON.stringify(r.data));
            $res.forEach((n) => {
                soldNumbers.push(parseInt(n.data));
            });
        }

        for (let i = 1; i < limit + 1; i++) {
            const cell = document.createElement("div");

            if (soldNumbers.includes(i)) {
                cell.className =
                    "cell d-flex justify-content-center align-items-center bg-danger";
            } else {
                cell.className =
                    "cell available-cell d-flex justify-content-center align-items-center bg-warning";
            }
            square.append(cell);

            cell.innerHTML += `<strong>${i}</strong>`;

            if (!soldNumbers.includes(i)) {
                cell.addEventListener("click", function() {
                    $("#buy-number-modal").modal("show");
                    $("#send").on("click", function() {
                        form.classList.remove("d-none");
                        selectedNumber = i;
                        console.log(selectedNumber);
                        cell.id = i;
                        userNumber.value = i;
                        $("#buy-number-modal").modal("hide");
                    });
                });
            }
        }

        document
            .querySelector(".close-modal")
            .addEventListener("click", closeModal);

        document.querySelector(".pay").addEventListener("click", function() {
            document.querySelector(".pay").classList.add("d-none");
        });
    })

.catch((e) => {
    console.log(e);
});

function closeModal() {
    form.classList.add("d-none");
}