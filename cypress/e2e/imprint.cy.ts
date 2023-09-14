import {StartPage} from "@/pages/StartPage"

describe('Imprint.', () => {
  const startPage:StartPage = new StartPage();

  beforeEach(() => {
    startPage.visit();
    startPage.waitForPageLoaded();  
  });

  it('Is clickable on inital start', () => {
    cy.ttValidateImprintClickable();  
  });  
})
