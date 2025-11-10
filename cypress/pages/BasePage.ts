export abstract class BasePage {
  visit() {
    cy.visit('/');
  }  

  waitForPageLoaded() {
    cy.wait(2000);  
  }

}
