<?php

set_error_handler(fn () => null,  E_WARNING);

class EquationSolver
{
    public function solve(string $equation, bool $unique = true): Generator
    {
        preg_match_all('/[A-Z]/', $equation, $output);

        yield from $this->doSolve($equation, [], array_unique($output[0]), $unique);
    }

    private function doSolve(string $equation, array $given, array $unknown, bool $unique): Generator
    {
        if (!$unknown) {
            try {
                if (eval(sprintf('return %s;', $solution = strtr($equation, $given)))) {
                    yield $solution;
                }
            } catch (ParseError $e) {
            }

            return;
        }

        $variable = array_shift($unknown);
        for ($i = 0; $i <= 9; $i++) {
            if (!$unique || !in_array($i, $given)) {
                yield from $this->doSolve($equation, [$variable => $i] + $given, $unknown, $unique);
            }
        }
    }
}

$equation1 = '2*A + 3*B - 1 == 3';
$equation2 = 'ABC + CAB == DCE';
$equation3 = 'log(A) < sqrt(B) - 2';

$solver = new EquationSolver();
foreach ($solver->solve($equation3) as $result) {
    echo("{$result}\n");
}
