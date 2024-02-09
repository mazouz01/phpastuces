<?php

class FeatureToggleBitmask {
    const FEATURE_A = 0b001; // Equivalent to 1 << 0
    const FEATURE_B = 0b010; // Equivalent to 1 << 1
    const FEATURE_C = 0b100; // Equivalent to 1 << 2

    private $features = 0;

    public function enableFeature($feature) {
        $this->features |= $feature;
    }

    public function disableFeature($feature) {
        $this->features &= ~$feature;
    }

    public function isFeatureEnabled($feature) {
        return ($this->features & $feature) === $feature;
    }
}
