/// <reference types="Cypress" />
describe('TESTIFY base tests', () => {
  beforeEach(() => {
    cy.visit('/');
  });

  it('Imprint link on starpage is clickable', () => {
    cy.ttValidateAllImagesResponseStatusOk();
    cy.ttEveryInternalLinkStatusOk();
    cy.ttValidateNoGoogleServices();
    cy.ttValidateImprintClickable();
    cy.ttValidatePageContent();
    cy.ttInvalidPath404();
    cy.ttAccessibility();
  });

});
