<?php 
class FYP_Shipment_Model_Observer 
{
    public function sendTrackEmail($observer){
    	$track = $observer->getEvent()->getTrack();
    	$shipment = $track->getShipment(true);
    	$shipment->sendEmail();
	}
}
