Cypress.on("uncaught:exception", (err, runnable) => {
    return false;
});

context("Actions", () => {
    beforeEach(() => {
        cy.viewport(1280, 720);
    });

    it("Guest input form 'Tidak Hadir'", () => {
        cy.visit("http://127.0.0.1:8000/guest/1");
        cy.get("#name_guest").type("Fajrul");
        cy.get("label.w-full > .bg-gray-50").select("Tidak Hadir");
        cy.get("#congratulation").type("Selamat !");
        cy.get(".justify-end > div > .text-white").click();
    });
    
    it("Guest input form 'Hadir'", () => {
        cy.visit("http://127.0.0.1:8000/guest/1");
        cy.get("#name_guest").type("Fajrul");
        cy.get("label.w-full > .bg-gray-50").select("Hadir");
        cy.get("#congratulation").type("Selamat !");
        cy.get(".justify-end > div > .text-white").click();
    });
    
    it("Guest input form 'Belum Pasti'", () => {
        cy.visit("http://127.0.0.1:8000/guest/1");
        cy.get("#name_guest").type("Fajrul");
        cy.get("label.w-full > .bg-gray-50").select("Belum Pasti");
        cy.get("#congratulation").type("Selamat !");
        cy.get(".justify-end > div > .text-white").click();
    });
});
