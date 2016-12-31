<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ModuleBundle\Services;
use Symfony\Component\Finder\Finder;

/**
 * Description of ModuleService
 *
 * @author Sylvain
 */
class ModuleService {
    
    public function getModulesType(){
        $searchPath = __DIR__.'/../CustomModules/';
        $finder     = new Finder();
        $finder->files()->in($searchPath)->name('*parameters.yml');
        
        foreach ($finder as $file) {
            $yaml = file_get_contents($file->getPathName());
            var_dump($yaml);
            $parsed = yaml_parse($yaml);
            var_dump($parsed);

            var_dump($file->getPathName());
        }
    }
}
