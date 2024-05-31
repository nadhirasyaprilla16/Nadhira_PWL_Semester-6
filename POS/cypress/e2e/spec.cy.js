describe('My First Test', () => {
  it('clicks the link "Beauty Health"', () => {
    cy.visit('http://localhost/Nadhira_PWL_Semester%206/POS/public/product')

    cy.contains('Beauty Health').click()
  })
})