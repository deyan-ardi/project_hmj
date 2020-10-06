const pilihanUtama = document.querySelector("#pilihanUtama"),
	pilihanCadangan = document.querySelector("#pilihanCadangan");

const panitiaCadangan = () => {
	if (pilihanUtama != null && pilihanCadangan != null) {
		const printList = (list) => {
			//set default
			let def = pilihanCadangan.querySelector("option").innerHTML;
			pilihanCadangan.innerHTML = `<option>${def}</option>`;

			// loop
			list.map((l) => (pilihanCadangan.innerHTML += `<option>${l}</option>`));

		}

		let getAllList = pilihanUtama.querySelectorAll("option");
		getAllList = [...getAllList];

		let all = [];
		getAllList.map((l) => all.push(l.innerHTML));

		let ls = pilihanUtama.value;
		let rest = [];
		all.filter((l) => {
			if (l != ls) rest.push(l);
		});
		printList(rest);
	}
}
panitiaCadangan();
// prodi
const nim = document.querySelector("#nim"),
	prodi = document.querySelector("#prodi");


const checkProdi = () => {
	if (nim != null && prodi != null) {
		const elProdi = prodi.querySelectorAll("option");
		if (nim.value.length == 10) {
			let code = nim.value.slice(4, 6);

			[...elProdi].filter((p) => {
				if (p.value == code) prodi.value = code;
			});
		}
	}
}

$(document).ready(function () {
	const success = $(".berhasil").data("berhasil");
	if (success) {
		Swal.fire({
			position: "center",
			icon: "success",
			text: "Berhasil " + success + "...",
			showConfirmButton: false,
			timer: 2500,
		});
	}
});
$(document).ready(function () {
	const gagal = $(".gagal").data("gagal");
	if (gagal) {
		Swal.fire({
			position: "center",
			icon: "error",
			text: "Opss.. Gagal " + gagal + "...",
			showConfirmButton: false,
			timer: 2500,
		});
	}
});
