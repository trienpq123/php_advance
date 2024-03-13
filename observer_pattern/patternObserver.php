<?php 
    class patternObserver extends Observer {
        public function __construct() {
        }
        public function update(Account $subject) {
          writeln('*IN PATTERN OBSERVER - NEW PATTERN GOSSIP ALERT*');
          writeln(' new favorite patterns: '.$subject->getName());
          writeln('*IN PATTERN OBSERVER - PATTERN GOSSIP ALERT OVER*');      
        }
    }
?>