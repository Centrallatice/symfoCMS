<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ModuleBundle\Services;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Yaml\Yaml;
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
        $data = array();
        foreach ($finder as $file) {
            $value = Yaml::parse(file_get_contents($file->getPathName()));
            $data[$value['id']]=$value;
        }
        return $data;
    }
}
