window.onload = function() {
    document.getElementById("download")
        .addEventListener("click", () => {
            const invoice = this.document.getElementById("cvpdf");
            console.log(invoice);
            console.log(window);
            var opt = {
                //margin: -2,
                filename: 'Mon_cv.pdf',
                image: { type: 'jpeg', quality: 0.95 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'pt', format: 'a2', orientation: 'p' }
            };
            html2pdf().from(invoice).set(opt).save();
        })
}