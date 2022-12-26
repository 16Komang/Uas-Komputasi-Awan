Cypress.on("uncaught:exception", (err, runnable) => {
    return false;
});

context("Actions", () => {
    beforeEach(() => {
        cy.viewport(1280, 720);
        cy.visit("http://127.0.0.1:8000/logout");
        cy.visit("http://127.0.0.1:8000/loginPage");
        cy.get("#email").type(email);
        cy.get("#password").type(password);
        cy.get("#remember").click();
        cy.get(".space-y-4 > .bg-blue-700").click();
    });

    const email = "usser@gmail.com";
    const password = "password";

    it("Membuat Undangan(terisi sesuai)", () => {
        cy.fixture("BGUltra.jpg", { encoding: null }).as("myFixture");
        cy.visit("http://127.0.0.1:8000/desain");
        cy.get(
            ":nth-child(1) > .max-w-xl > .bg-white > .p-5 > button > .text-white"
        ).click();
        cy.get("#date").type("2023-01-12");
        cy.get("#time_start").type("16:00");
        cy.get("#time_end").type("22:00");
        cy.get("#name_groom").type("Mustafa");
        cy.get("#father_groom").type("Mustafa's Father");
        cy.get("#mother_groom").type("Mustafa's Mother");
        cy.get("#image_groom").selectFile("@myFixture");
        cy.get("#name").type("Yuliva");
        cy.get("#father").type("Yuliva's Father");
        cy.get("#mother").type("Yuliva's Mother");
        cy.get("#image").selectFile("@myFixture");
        cy.get("#name_place").type("Mustafa's Place");
        cy.get("#address").type("Jalan Mustompa nomor 3B");
        cy.get("#place_desc").type(
            "Rumah bernuansa Swiss Terdapat bendera Nazi"
        );
        cy.get("#image_place").selectFile("@myFixture");
        cy.get("#image_gallery").selectFile("@myFixture");
        cy.get("#rekening").type("123 - 1 - 2312 - 41 - 2");
        cy.get(".bg-blue-500").click();
    });

    it("Membuat Undangan(waktu < today)", () => {
        cy.fixture("BG Desktop.jpg", { encoding: null }).as("myFixture");
        cy.visit("http://127.0.0.1:8000/desain");
        cy.get(
            ":nth-child(1) > .max-w-xl > .bg-white > .p-5 > button > .text-white"
        ).click();
        cy.get("#date").type("2022-01-12");
        cy.get("#time_start").type("16:00");
        cy.get("#time_end").type("22:00");
        cy.get("#name_groom").type("Mustafa");
        cy.get("#father_groom").type("Mustafa's Father");
        cy.get("#mother_groom").type("Mustafa's Mother");
        cy.get("#image_groom").selectFile("@myFixture");
        cy.get("#name").type("Yuliva");
        cy.get("#father").type("Yuliva's Father");
        cy.get("#mother").type("Yuliva's Mother");
        cy.get("#image").selectFile("@myFixture");
        cy.get("#name_place").type("Mustafa's Place");
        cy.get("#address").type("Jalan Mustompa nomor 3B");
        cy.get("#place_desc").type(
            "Rumah bernuansa Swiss Terdapat bendera Nazi"
        );
        cy.get("#image_place").selectFile("@myFixture");
        cy.get("#image_gallery").selectFile("@myFixture");
        cy.get("#rekening").type("123 - 1 - 2312 - 41 - 2");
        cy.get(".bg-blue-500").click();
    });

    it("Membuat Undangan(file berupa pdf)", () => {
        cy.fixture("Keterangan.pdf", { encoding: null }).as("myFixture2");
        cy.visit("http://127.0.0.1:8000/desain");
        cy.get(
            ":nth-child(1) > .max-w-xl > .bg-white > .p-5 > button > .text-white"
        ).click();
        cy.get("#date").type("2023-01-12");
        cy.get("#time_start").type("16:00");
        cy.get("#time_end").type("22:00");
        cy.get("#name_groom").type("Mustafa");
        cy.get("#father_groom").type("Mustafa's Father");
        cy.get("#mother_groom").type("Mustafa's Mother");
        cy.get("#image_groom").selectFile("@myFixture2");
        cy.get("#name").type("Yuliva");
        cy.get("#father").type("Yuliva's Father");
        cy.get("#mother").type("Yuliva's Mother");
        cy.get("#image").selectFile("@myFixture2");
        cy.get("#name_place").type("Mustafa's Place");
        cy.get("#address").type("Jalan Mustompa nomor 3B");
        cy.get("#place_desc").type(
            "Rumah bernuansa Swiss Terdapat bendera Nazi"
        );
        cy.get("#image_place").selectFile("@myFixture2");
        cy.get("#image_gallery").selectFile("@myFixture2");
        cy.get("#rekening").type("123 - 1 - 2312 - 41 - 2");
        cy.get(".bg-blue-500").click();
    });
});
