import {StartPage} from "@/pages/StartPage"

describe('Google services.', () => {
  const startPage:StartPage = new StartPage();
  
  beforeEach(() => {
    startPage.visit();
    startPage.waitForPageLoaded();
  });

  it('No routes are loaded.', () => {
    cy.ttValidateNoGoogleServices();  
  })  
});
