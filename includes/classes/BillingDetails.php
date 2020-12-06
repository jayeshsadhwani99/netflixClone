<?php
class BillingDetails {
    
    public static function insertDetails($con, $agreement, $token, $username) {
    $query = $con->prepare("INSERT INTO billingDetails (agreementId, nextBillingDate, token, username
                            VALUES(:agreementId, :nextBillingDate, :token, :username");
    $agreementDetails = $agreement->getAgreementDetails();

    $query->bindValue(":agreementId", $agreement->getId());
    $query->bindValue(":nextBillingDate", $agreement->getnextBillingDate());
    $query->bindValue(":token", $agreement->gettoken());
    $query->bindValue(":username", $agreement->getusername());

    return $query->execute();
    }
}
?>